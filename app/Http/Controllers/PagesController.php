<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    function index(){
        $data['pageTitle'] = 'Home | Stock Pilot';
        return view("pages/home", $data);
    }
    
    public function aboutUs(){
        $data['pageTitle'] = 'About Us | Stock Pilot';
        return view("pages/about-us", $data);

    }
    public function blogs(){
        $data['pageTitle'] = 'Blogs | Stock Pilot';
        return view("pages/blog", $data);

    }
    public function contactUs(){
        $data['pageTitle'] = 'Contact Us | Stock Pilot';
        return view("pages/contact-us", $data);

    }
    public function demo(){
        $data['pageTitle'] = 'Demo | Stock Pilot';
        return view("pages/demo", $data);

    }
    public function faqs(){
        $data['pageTitle'] = 'FAQs | Stock Pilot';
        return view("pages/faq", $data);

    }
    public function pilot(){
        $data['pageTitle'] = 'Pilot | Stock Pilot';
        return view("pages/pilot", $data);

    }
    public function partners(){
        $data['pageTitle'] = 'partners | Stock Pilot';
        return view("pages/partners", $data);

    }
    public function products(){
        $data['pageTitle'] = 'Products | Stock Pilot';
        return view("pages/products", $data);

    }
    public function subscribers(){
        $data['pageTitle'] = 'Subscribers | Stock Pilot';
        return view("pages/subscribers", $data);

    }
    public function strategy(){
        $data['pageTitle'] = 'Strategy | Stock Pilot';
        return view("pages/strategy", $data);

    }
    public function caseStudies(){
        $data['pageTitle'] = 'Case Studies | Stock Pilot';
        return view("pages/case-studies", $data);

    }
    
}
