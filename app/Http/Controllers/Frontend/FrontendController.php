<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Home;
use App\Models\Gallery;
use App\Models\Team;
// use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function home()
    {
        $homes=Home::all();
        $galleries=Gallery::all();
        $teams=Team::all();
        return view('frontend.pages.home',compact('homes','galleries', 'teams'));
    
    }

    public function gallery()
    {
        $galleries=Gallery::all();
        return view('frontend.pages.gallery',compact('galleries'));
    
    }

    public function team()
    {
        $teams=Team::all();
        return view('frontend.pages.teammates',compact('teams'));
    
    }

    public function about()
    {
        return view('frontend.pages.about');
    
    }
}