<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Gallery;
use App\Models\Category;
use Illuminate\Http\Request;

class GalleryController extends Controller
{
    public function index(){
        $galleries =Gallery::with('category')->get();
        return view ('admin.pages.gallery.index', compact('galleries'));
    }

    public function create(){
        $categories=Category::where('deleted','no')->get();
        return view ('admin.pages.gallery.create', compact('categories'));
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
            'category_id' =>$request->category,
            'image' =>$path,
        ]);
        return redirect()->route('gallery.index')->with('success', 'Created Successfully!');
    }

    public function details($id)
    {
      $gallery=Gallery::find($id);
      return view ('admin.pages.gallery.details',compact('gallery'));
    }

    public function edit($id)
    {
        $gallery = Gallery::find($id);
        $categories=Category::where('deleted','no')->get();
        if ($gallery) {
            return view('admin.pages.gallery.edit',compact('gallery','categories'));
        }
    }

    public function update(Request $request,$id){

        $request->validate([
            'name'=>'required',
            'category'=>'required',
            'image'=>'required',
        ]);
        
        $gallery = Gallery::find($id); 

        if($request->has('image')){
            $path = $request->image->store('public/gallery');
        }else{
            $path = $gallery->image;
        }

        if ($gallery) {
            $gallery->update([
                'name' =>$request->name,
                'category_id' =>$request->category,
                'image' =>$path,
            ]);
            return redirect()->route('gallery.index')->with('message', 'Updated Successfully!');
        }
    }

    public function delete($id)
    {
      Gallery::find($id)->delete();
      return redirect()->route('gallery.index')->with('msg','Deleted.');
    }
}