<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\About;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class AboutController extends Controller
{
    public function index(){
        $abouts =About::latest('id')->where('deleted', 'no')->get();
        return view('admin.pages.about.index',compact('abouts'));
    }
    public function create(){
        return view('admin.pages.about.create');
    }

    public function store(Request $request){

        $request->validate([
            'description'=>'required',
            'image'=>'required|',
        ]);

        $path = $request->image->store('public/about');
        about::create([
            // field name for DB || field name for form
            'description' =>$request->description,
            'image' =>$path,
        ]);
        return redirect()->route('about.index')->with('success', 'About Created Successfully!');
    }

    public function edit($id)
    {
        $about = About::find($id);
        if ($about) {
            return view('admin.pages.about.edit',compact('about'));
        }
    }

    public function update(Request $request,$id){

        $about = About::find($id);

        if($request->has('image')){
            $path = $request->image->store('public/about');
        }else{
            $path = $about->image;
        }

        if ($about) {
            $about->update([
                'description' =>$request->description,
                'image' =>$path,
            ]);
            return redirect()->route('about.index')->with('message', 'About Updated Successfully!');
        }
    }

    public function delete($id)
    {
      $about=about::find($id);
      $about->description = $about->image. 'deleted' .$id;
      $user = Auth::id();
      $about->deleted_by = $user;
      $about->deleted = 'yes';
      $about->status = 'Inactive';
      $about->save();

     return redirect()->route('about.index')->with('msg','About Successfully!');
    }

}
