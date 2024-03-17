<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Service;
use App\Models\Page;
use App\Models\Block;

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

    //Single Service page
    public function single_service($slug){
        
        $service = Service::where('slug', $slug)->first();
        
        return view('single_service', compact('service'));
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

        $lolo = BLock::where('id', 1)->first();

        return view('contact', compact('lolo'));
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
