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

    public function details($id)
    {
      $gallery=gallery::find($id);
      return view ('admin.pages.gallery.details',compact('gallery'));
    }

    public function edit($id)
    {
        $gallery = gallery::find($id);
        if ($gallery) {
            return view('admin.pages.gallery.edit',compact('gallery'));
        }
    }

    public function update(Request $request,$id){

        $request->validate([
            'name'=>'required',
            'category'=>'required',
            'image'=>'required',
        ]);
        
        $gallery = gallery::find($id); 

        if($request->has('image')){
            $path = $request->image->store('public/gallery');
        }else{
            $path = $gallery->image;
        }

        if ($gallery) {
            $gallery->update([
                'name' =>$request->name,
                'category' =>$request->category,
                'image' =>$path,
            ]);
            return redirect()->route('gallery.index')->with('message', 'Updated Successfully!');
        }
    }

    public function delete($id)
    {
      gallery::find($id)->delete();
      return redirect()->route('gallery.index')->with('msg','Deleted.');
    }
}