<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\Home;
use App\Models\Gallery;
use App\Models\Team;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function dashboard()
    {
        $count['user']=User::all()->count();
        $count['home']=Home::all()->count();
        $count['team']=Team::all()->count();
        $count['gallery']=Gallery::all()->count();

        return view('admin.pages.dashboard.dash',compact('count'));
    }
}
