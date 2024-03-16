<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Service;
use App\Models\Page;

class PagesController extends Controller
{
    //Index page
    public function index(){

        return view('index');
    }

    //Services page
    public function services(){

        $services = Service::orderBy('position')->get();
        
        return view('services', compact('services'));
    }

    //About page
    public function about(){
        
        return view('about');
    }

    //Portfolio page
    public function portfolio() {

        return view('portfolio');
    }

    //Single portfolio page
    public function single_portfolio($slug) {

        return view('single-portfolio');
    }

    //Contact page
    public function contact() {

        return view('contact');
    }

    //Static pages
    public function static_pages($slug){
        
        $static_page = Page::where('slug', $slug)->where('active', true)->first();

        // If page not found, throw a 404 exception
        if (!$static_page) {
            return view ('404_page');
        }

        return view ('static_page', compact('static_page'));
    }

}
