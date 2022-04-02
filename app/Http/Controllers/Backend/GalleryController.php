<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Gallery;
use Illuminate\Http\Request;

class GalleryController extends Controller
{
    public function index(){
        $galleries =Gallery::paginate(5);
        return view ('admin.pages.gallery.index', compact('galleries'));
    }

    public function create(){
        return view ('admin.pages.gallery.create');
    }

    public function store(Request $request){
        
        $request->validate([
            'name'=>'required',
            'category'=>'required',
            'image'=>'required',
        ]);
        
        $path = $request->image->store('public/gallery');
        Gallery::create([
            // field name for DB || field name for form
            'name' =>$request->name,
            'category' =>$request->category,
            'image' =>$path,
        ]);
        return redirect()->route('gallery.index')->with('success', 'Created Successfully!');
    }

}