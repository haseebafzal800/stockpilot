<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;

use App\Models\HomeModel;
use Illuminate\Http\Request;

class SettingController extends Controller
{
    public function home(){
        $data['pageTitle'] = 'Home Page Settings';
        $data['homeSettings'] = 'active';
        $data['settingsOpend'] = 'menu-open';
        $data['settingsOpening'] = 'menu-is-opening';
        $data['item'] = HomeModel::find(1);
        return view('admin.pages.home', $data);
    }
    public function updateHome(Request $request){
        $body = HomeModel::find($request->id);
        $request['user_id'] = auth()->user()->id;
        if($body->update($request->all())){
            session()->flash('msg', 'Successfully saved the data!');
            session()->flash('alert-class', 'alert-success');
            
            return redirect()->route('home-settings');
        }else{
            session()->flash('msg', 'Successfully saved the data!');
            session()->flash('alert-class', 'alert-danger');
            return back();
        }
    }

    public function aboutUs(){
        $data['pageTitle'] = 'AboutUs Page Settings';
        $data['aboutSettings'] = 'active';
        $data['settingsOpend'] = 'menu-open';
        $data['settingsOpening'] = 'menu-is-opening';
        $data['item'] = HomeModel::find(2);
        return view('admin.pages.aboutus', $data);
    }
    public function updateAboutUs(Request $request){
        $body = HomeModel::find($request->id);
        $request['user_id'] = auth()->user()->id;
        if($body->update($request->all())){
            session()->flash('msg', 'Successfully saved the data!');
            session()->flash('alert-class', 'alert-success');
            
            return redirect()->route('aboutus-settings');
        }else{
            session()->flash('msg', 'Successfully saved the data!');
            session()->flash('alert-class', 'alert-danger');
            return back();
        }
    }


    public function services(){
        $data['pageTitle'] = 'Services Page Settings';
        $data['serviceSettings'] = 'active';
        $data['settingsOpend'] = 'menu-open';
        $data['settingsOpening'] = 'menu-is-opening';
        $data['item'] = HomeModel::find(3);
        return view('admin.pages.services', $data);
    }
    public function updateServices(Request $request){
        $body = HomeModel::find($request->id);
        $request['user_id'] = auth()->user()->id;
        if($body->update($request->all())){
            session()->flash('msg', 'Successfully saved the data!');
            session()->flash('alert-class', 'alert-success');
            
            return redirect()->route('services-settings');
        }else{
            session()->flash('msg', 'Successfully saved the data!');
            session()->flash('alert-class', 'alert-danger');
            return back();
        }
    }
    public function portfolio(){
        $data['pageTitle'] = 'Portfolio Page Settings';
        $data['portfolioSettings'] = 'active';
        $data['settingsOpend'] = 'menu-open';
        $data['settingsOpening'] = 'menu-is-opening';
        $data['item'] = HomeModel::find(4);
        return view('admin.pages.portfolio', $data);
    }
    public function updatePortfolio(Request $request){
        $body = HomeModel::find($request->id);
        $request['user_id'] = auth()->user()->id;
        if($body->update($request->all())){
            session()->flash('msg', 'Successfully saved the data!');
            session()->flash('alert-class', 'alert-success');
            
            return redirect()->route('portfolio-settings');
        }else{
            session()->flash('msg', 'Successfully saved the data!');
            session()->flash('alert-class', 'alert-danger');
            return back();
        }
    }


    public function support(){
        $data['pageTitle'] = 'Support Page Settings';
        $data['supportSettings'] = 'active';
        $data['settingsOpend'] = 'menu-open';
        $data['settingsOpening'] = 'menu-is-opening';
        $data['item'] = HomeModel::find(3);
        return view('admin.pages.support', $data);
    }
    public function updateSupport(Request $request){
        $body = HomeModel::find($request->id);
        $request['user_id'] = auth()->user()->id;
        if($body->update($request->all())){
            session()->flash('msg', 'Successfully saved the data!');
            session()->flash('alert-class', 'alert-success');
            
            return redirect()->route('support-settings');
        }else{
            session()->flash('msg', 'Successfully saved the data!');
            session()->flash('alert-class', 'alert-danger');
            return back();
        }
    }


    public function blog(){
        $data['pageTitle'] = 'Blog Page Settings';
        $data['blogSettings'] = 'active';
        $data['settingsOpend'] = 'menu-open';
        $data['settingsOpening'] = 'menu-is-opening';
        $data['item'] = HomeModel::find(5);
        return view('admin.pages.blog', $data);
    }
    public function updateBlog(Request $request){
        $body = HomeModel::find($request->id);
        $request['user_id'] = auth()->user()->id;
        if($body->update($request->all())){
            session()->flash('msg', 'Successfully saved the data!');
            session()->flash('alert-class', 'alert-success');
            
            return redirect()->route('blog-settings');
        }else{
            session()->flash('msg', 'Successfully saved the data!');
            session()->flash('alert-class', 'alert-danger');
            return back();
        }
    }

    public function demo(){
        $data['pageTitle'] = 'Demo Page Settings';
        $data['demoSettings'] = 'active';
        $data['settingsOpend'] = 'menu-open';
        $data['settingsOpening'] = 'menu-is-opening';
        $data['item'] = HomeModel::find(6);
        return view('admin.pages.demo', $data);
    }
    public function updateDemo(Request $request){
        $body = HomeModel::find($request->id);
        $request['user_id'] = auth()->user()->id;
        if($body->update($request->all())){
            session()->flash('msg', 'Successfully saved the data!');
            session()->flash('alert-class', 'alert-success');
            
            return redirect()->route('demo-settings');
        }else{
            session()->flash('msg', 'Successfully saved the data!');
            session()->flash('alert-class', 'alert-danger');
            return back();
        }
    }

    public function faqs(){
        $data['pageTitle'] = 'FAQs Page Settings';
        $data['faqsSettings'] = 'active';
        $data['settingsOpend'] = 'menu-open';
        $data['settingsOpening'] = 'menu-is-opening';
        $data['item'] = HomeModel::find(7);
        return view('admin.pages.faqs', $data);
    }
    public function updateFaqs(Request $request){
        $body = HomeModel::find($request->id);
        $request['user_id'] = auth()->user()->id;
        if($body->update($request->all())){
            session()->flash('msg', 'Successfully saved the data!');
            session()->flash('alert-class', 'alert-success');
            
            return redirect()->route('faqs-settings');
        }else{
            session()->flash('msg', 'Successfully saved the data!');
            session()->flash('alert-class', 'alert-danger');
            return back();
        }
    }

    public function partner(){
        $data['pageTitle'] = 'partner Page Settings';
        $data['partnerSettings'] = 'active';
        $data['settingsOpend'] = 'menu-open';
        $data['settingsOpening'] = 'menu-is-opening';
        $data['item'] = HomeModel::find(8);
        return view('admin.pages.partner', $data);
    }
    public function updatePartner(Request $request){
        $body = HomeModel::find($request->id);
        $request['user_id'] = auth()->user()->id;
        if($body->update($request->all())){
            session()->flash('msg', 'Successfully saved the data!');
            session()->flash('alert-class', 'alert-success');
            
            return redirect()->route('partner-settings');
        }else{
            session()->flash('msg', 'Successfully saved the data!');
            session()->flash('alert-class', 'alert-danger');
            return back();
        }
    }

}
