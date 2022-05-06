<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Home;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        $homes =Home::latest()->paginate(5);
        return view ('admin.pages.home.index',compact('homes'));
    }

    public function create(){
        return view ('admin.pages.home.create');
    }

    public function store(Request $request){

        $request->validate([
            'name'=>'required',
            'image'=>'required|',
        ]);

        $path = $request->image->store('public/home');
        Home::create([
            // field name for DB || field name for form
            'name' =>$request->name,
            'image' =>$path,
        ]);
        return redirect()->route('home.index')->with('success', 'Created Successfully!');
    }

    public function edit($id)
    {
        $home = Home::find($id);
        if ($home) {
            return view('admin.pages.home.edit',compact('home'));
        }
    }

    public function update(Request $request,$id){

        $home = Home::find($id);

        if($request->has('image')){
            $path = $request->image->store('public/home');
        }else{
            $path = $home->image;
        }

        if ($home) {
            $home->update([
                'name' =>$request->name,
                'image' =>$path,
            ]);
            return redirect()->route('home.index')->with('message', 'Updated Successfully!');
        }
    }

    public function delete($id)
    {
      Home::find($id)->delete();
      return redirect()->route('home.index')->with('msg','Deleted Successfully!');
    }
}