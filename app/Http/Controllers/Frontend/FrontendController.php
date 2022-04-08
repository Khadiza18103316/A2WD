<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Home;
use App\Models\Gallery;
use App\Models\Team;
use App\Models\Category;
use App\Models\Setting;

// use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function home()
    {
        $homes=Home::all();
        $galleries=Gallery::all();
        $teams=Team::all();
        $settings=Setting::all();
        return view('frontend.pages.home',compact('homes','galleries', 'teams','settings'));
    
    }

    public function gallery()
    {
        $galleries=Gallery::all();
        $categories=Category::where('deleted','no')->get();
        return view('frontend.pages.gallery',compact('galleries','categories'));
    
    }

    public function team()
    {
        $teams=Team::latest()->get();
        $settings=Setting::all();
        return view('frontend.pages.teammates',compact('teams','settings'));
    
    }

    public function about()
    {
        return view('frontend.pages.about');
    
    }

      // Search 
        public function search(){
            $key=request()->search;
            $teams = Team::where('name','LIKE','%'.$key.'%')
                ->orWhere('member_id','LIKE','%'.$key.'%')
                ->orWhere('designation','LIKE','%'.$key.'%')->get();    
            return view('frontend.pages.search',compact('teams','key'));
        }

        public function logo()
    {
        $settings=Setting::all();
        return view('frontend.partials.header',compact('settings'));
    
    }

    public function footer()
    {
        $settings=Setting::all();
        return view('frontend.patials.footer',compact('settings'));
    
    }
    
    }