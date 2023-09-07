<?php

namespace App\Http\Controllers;

use App\Models\BlogsModel;
use App\Models\HomeModel;
use App\Models\NewsModel;
use App\Models\TeamModel;
use App\Models\TestimonialsModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;


class PagesController extends Controller
{
    function index(){
        $data['page'] = HomeModel::find(1);
        $data['pageTitle'] = $data['page']->mataTitle. ' | Stock Pilot';
        $data['mataDescription'] = $data['page']->mataDescription;
        $data['mataTags'] = $data['page']->mataTags;
        $data['testimonials'] = TestimonialsModel::get();
        return view("pages/home", $data);
    }
    
    public function aboutUs(){
        $data['page'] = HomeModel::find(2);
        $data['pageTitle'] = $data['page']->mataTitle. ' | Stock Pilot';
        $data['mataDescription'] = $data['page']->mataDescription;
        $data['mataTags'] = $data['page']->mataTags;
        $data['testimonials'] = TestimonialsModel::get();
        $data['team'] = TeamModel::get();
        $data['news'] = NewsModel::get();
        return view("pages/about-us", $data);
    }

    public function products(){
        $data['page'] = HomeModel::find(3);
        $data['pageTitle'] = $data['page']->mataTitle. ' | Stock Pilot';
        $data['mataDescription'] = $data['page']->mataDescription;
        $data['mataTags'] = $data['page']->mataTags;
        $data['testimonials'] = TestimonialsModel::get();
        return view("pages/products", $data);
    }
    public function blogs(){
        $data['page'] = HomeModel::find(5);
        $data['pageTitle'] = $data['page']->mataTitle. ' | Stock Pilot';
        $data['mataDescription'] = $data['page']->mataDescription;
        $data['mataTags'] = $data['page']->mataTags;
        $data['topBar'] = BlogsModel::where('in_topbar','on')->limit(3)->get();
        $data['recents'] = BlogsModel::limit(4)->orderBy('id', 'DESC')->limit(4)->get();
        $data['blogs'] = BlogsModel::get();
        $data['testimonials'] = TestimonialsModel::get();
        return view("pages/blog", $data);
    }
    public function contactUs(){
        $data['page'] = HomeModel::find(8);
        $data['pageTitle'] = $data['page']->mataTitle. ' | Stock Pilot';
        $data['mataDescription'] = $data['page']->mataDescription;
        $data['mataTags'] = $data['page']->mataTags;
        return view("pages/contact-us", $data);

    }
    public function submitContactUs(Request $request){
        // dd($request);
        $detail['title'] = 'Contact us Email';
        $detail['body'] = $request->message;
        $detail['name'] = $request->name;
        $detail['email'] = $request->email;
        $detail['phone'] = $request->phone;
        $detail['contactMethod'] = $request->flexRadioDefault;
        // dd(Mail::failures());
        \Mail::to('asif.zardari.ppp1@gmail.com')->send(new \App\Mail\contactUsEmail($detail));
        // Mail::to('asif.zardari.ppp1@gmail.com')->send();
    }
    
    public function demo(){
        $data['page'] = HomeModel::find(11);
        $data['pageTitle'] = $data['page']->mataTitle. ' | Stock Pilot';
        $data['mataDescription'] = $data['page']->mataDescription;
        $data['mataTags'] = $data['page']->mataTags;
        $data['testimonials'] = TestimonialsModel::get();
        return view("pages/demo", $data);

    }
    public function faqs(){
        $data['pageTitle'] = 'FAQs | Stock Pilot';
        $data['testimonials'] = TestimonialsModel::get();
        return view("pages/faq", $data);

    }
    public function pilot(){
        $data['page'] = HomeModel::find(14);
        $data['pageTitle'] = $data['page']->mataTitle. ' | Stock Pilot';
        $data['mataDescription'] = $data['page']->mataDescription;
        $data['mataTags'] = $data['page']->mataTags;
        $data['testimonials'] = TestimonialsModel::get();
        return view("pages/pilot", $data);

    }
    public function partners(){
        $data['pageTitle'] = 'partners | Stock Pilot';
        return view("pages/partners", $data);

    }
    public function subscribers(){
        $data['page'] = HomeModel::find(4);
        $data['pageTitle'] = $data['page']->mataTitle. ' | Stock Pilot';
        $data['mataDescription'] = $data['page']->mataDescription;
        $data['mataTags'] = $data['page']->mataTags;
        $data['testimonials'] = TestimonialsModel::get();
        return view("pages/subscribers", $data);

    }
    public function strategy(){
        $data['page'] = HomeModel::find(10);
        $data['pageTitle'] = $data['page']->mataTitle. ' | Stock Pilot';
        $data['mataDescription'] = $data['page']->mataDescription;
        $data['mataTags'] = $data['page']->mataTags;
        $data['testimonials'] = TestimonialsModel::get();
        return view("pages/strategy", $data);
    }
    public function caseStudies(){
        $data['page'] = HomeModel::find(7);
        $data['page2'] = HomeModel::find(8);
        $data['pageTitle'] = $data['page']->mataTitle. ' | Stock Pilot';
        $data['mataDescription'] = $data['page']->mataDescription;
        $data['mataTags'] = $data['page']->mataTags;
        $data['testimonials'] = TestimonialsModel::get();
        return view("pages/case-studies", $data);
    }
    
}
