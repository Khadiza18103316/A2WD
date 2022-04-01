<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Home;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        $homes =Home::paginate(5);
        return view ('admin.pages.home.index',compact('homes'));
    }

    public function create(){
        return view ('admin.pages.home.create');
    }

    public function store(Request $request){
        $request->validate([
            'name'=>'required',
            'image'=>'required',
        ]);
        $path = $request->image->store('public/image');
        Home::create([
            // field name for DB || field name for form
            'name' =>$request->name,
            'image' =>$path,
        ]);
        return redirect()->route('admin.index')->with('success', 'Created Successfully!');

    }
}