<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Service;
use App\Models\Page;
use App\Models\Block;
use App\Models\Portfolio;
use App\Models\Submission;
use App\Models\Article;
use GuzzleHttp\Client;
use GuzzleHttp\Exception\RequestException;

class PagesController extends Controller
{
    //Index page
    public function index()
    {

        $portfolios = Portfolio::latest()->take(2)->get();
        $services = Service::take(4)->get();

        return view('index', compact('portfolios', 'services'));
    }

    //Services page
    public function services()
    {

        $services = Service::orderBy('position')->get();

        return view('services', compact('services'));
    }

    //Single Service page
    public function single_service($slug)
    {

        $service = Service::where('slug', $slug)->first();

        // If page not found, throw a 404 exception
        if (!$service) {
            return view('404_page');
        }

        return view('single_service', compact('service'));
    }

    //About page
    public function about()
    {

        return view('about');
    }

    //Portfolio page
    public function portfolio()
    {

        $portfolios = Portfolio::all();

        $categories = Portfolio::pluck('category')->flatMap(function ($category) {
            // Split categories by comma and trim each one
            return array_map('trim', explode(',', $category));
        })->unique();


        return view('portfolio', compact('portfolios', 'categories'));
    }

    //Single portfolio page
    public function single_portfolio($slug)
    {

        $portfolio = Portfolio::where('slug', $slug)->first();

        return view('single_portfolio', compact('portfolio'));
    }


    //Blog page
    public function blog()
    {

        $articles = Article::where('active', 1)->get();

        return view('blog', compact('articles'));
    }


    //Single Blog page
    public function single_post($slug)
    {
        $article= Article::where('slug', $slug)->first();

        return view('single_post', compact('article'));
    }

    //Contact page
    public function contact()
    {

        $lolo = BLock::where('id', 1)->first();

        return view('contact', compact('lolo'));
    }

    //Static pages
    public function static_pages($slug)
    {

        if ($slug === 'sitemap.xml') {
            $sitemap = $this-> sitemap();
            return($sitemap);
        }

        $static_page = Page::where('slug', $slug)->where('active', true)->first();

        // If page not found, throw a 404 exception
        if (!$static_page) {
            return view('404_page');
        }

        return view('static_page', compact('static_page'));
    }

     //sitemap
     public function sitemap() {
        $static_pages = Page::all();
        $portfolios = Portfolio::all();
        $services = Service::all();
        return response()->view('sitemap',compact('portfolios','services','static_pages'))->header('Content-Type', 'text/xml');
      }

    //Website checker
    public function website_checker(Request $request)
    {
        // Get the URL from the request
        $url = $request->input('website');

        // Create a Guzzle client instance
        $client = new Client();

        try {
            // Start the timer
            $start = microtime(true);

            // Send a GET request to the website
            $response = $client->request('GET', $url);

            // Calculate the response time
            $responseTime = microtime(true) - $start;

            // Get the response status code
            $statusCode = $response->getStatusCode();

            // Get the HTML content of the response
            $html = $response->getBody()->getContents();

            // Count the number of resource URLs referenced in the HTML
            $numberOfRequests = preg_match_all('/(src|href)=["\']([^"\']+)/i', $html, $matches);

            // Calculate the rank based on response time and number of requests
            $rank = $this->calculateRank($responseTime, $numberOfRequests);

            // Return the results including the rank
            return response()->json([
                'response_time' => $responseTime,
                'status_code' => $statusCode,
                'number_of_requests' => $numberOfRequests,
                'rank' => $rank,
                'website'=>$url
            ]);
        } catch (RequestException $e) {
            // Handle request exceptions
            $statusCode = $e->getResponse()->getStatusCode();
            return response()->json([
                'error' => 'Request failed with status code ' . $statusCode,
                'status_code' => $statusCode
            ], $statusCode);
        } catch (\Exception $e) {
            // Handle other exceptions
            return response()->json(['error' => $e->getMessage()], 500);
        }
    }

    // Function to calculate the rank
    private function calculateRank($responseTime, $numberOfRequests)
    {
        // Define scoring ranges and corresponding scores
        $responseTimeRanges = [
            [0, 0.5],   // Range for very fast response time (in seconds)
            [0.5, 1],   // Range for fast response time
            [1, 2],     // Range for moderate response time
            [2, 5],     // Range for slow response time
            [5, INF]    // Range for very slow response time
        ];

        $numberOfRequestsRanges = [
            [0, 100],   // Range for very low number of requests
            [100, 500], // Range for low number of requests
            [500, 1000],// Range for moderate number of requests
            [1000, 5000],// Range for high number of requests
            [5000, INF] // Range for very high number of requests
        ];

        // Define corresponding scores for each range
        $scores = [
            'very_fast' => 10,
            'fast' => 8,
            'moderate' => 6,
            'slow' => 4,
            'very_slow' => 2
        ];

        // Calculate speed score based on response time
        foreach ($responseTimeRanges as $index => $range) {
            if ($responseTime >= $range[0] && $responseTime < $range[1]) {
                $responseTimeScore = $scores[array_keys($scores)[$index]];
                break;
            }
        }

        // Calculate speed score based on number of requests
        foreach ($numberOfRequestsRanges as $index => $range) {
            if ($numberOfRequests >= $range[0] && $numberOfRequests < $range[1]) {
                $numberOfRequestsScore = $scores[array_keys($scores)[$index]];
                break;
            }
        }

        // Calculate total speed score
        $totalScore = ($responseTimeScore + $numberOfRequestsScore) / 2;

        // Map the total score to a rank between 1 and 10
        $rank = round(($totalScore / 10) * 9) + 1;

        return $rank;
    }


    //Website checker send email
    public function website_checker_send_email(Request $request)
    {
        // Validate the request data
        $request->validate([
            'email' => 'required|email',
        ]);

        // Retrieve the email and response data from the request
        $email = $request->input('email');
        $responseData = $request->input('response');

        // Create a new Submission instance and set its attributes
        $submission = new Submission();
        $submission->email = $email;
        $submission->response_time = $responseData['response_time'];
        $submission->requests = $responseData['number_of_requests'];
        $submission->rank = $responseData['rank'];
        $submission->website = $responseData['website'];

        // Save the submission to the database
        $submission->save();
        
        // You can return a response to the AJAX request if needed
        return response()->json(['message' => 'Email sent successfully'], 200);
    }

}
