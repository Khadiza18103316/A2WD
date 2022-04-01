<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Home;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        return view ('admin.pages.home.index');
    }

    public function create(){
        return view ('admin.pages.home.create');
    }

    public function store(Request $request){
        $filename = '';
        if ($request->hasFile('image')){
            $file = $request->file('image');
            $filename = date('Ymdhms').'.'.$file->getclientOriginalExtension();
            $file->sotreAs('/uploads', $filename);
        }

        $request->validate([
            'name'=>'required',
        ]);

        Home::create([
            // field name for DB || field name for form
            'nmae' =>$request->name,
            'image' =>$filename
        ]);
        return redirect()->route('admin.index')->with('success', 'Created Successfully!');

    }
}