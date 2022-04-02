<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Home;
use App\Models\Gallery;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function slides()
    {
        $homes=Home::all();
        return view('frontend.pages.slides',compact('homes'));
    
    }

   public function about()
    {

    return view('frontend.pages.about');
    
    }

    public function gallery()
    {
    $galleries=Gallery::all();
    return view('frontend.pages.gallery', compact('galleries'));
    }
}