<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index(){
        $categories =category::paginate(5);
        return view ('admin.pages.category.index', compact('categories'));
    }

    public function create(){
        return view ('admin.pages.category.create');
    }

    public function store(Request $request){
        
        $request->validate([
            'name'=>'required',
            'category_id'=>'required|numeric',
            'image'=>'required',
        ]);
        
        $path = $request->image->store('public/category');
        category::create([
            // field name for DB || field name for form
            'name' =>$request->name,
            'category_id' =>$request->category_id,
            'image' =>$path,
        ]);
        return redirect()->route('category.index')->with('success', 'Created Successfully!');
    }

    public function details($id)
    {
      $category=Category::find($id);
      return view ('admin.pages.category.details',compact('category'));
    }

    public function edit($id)
    {
        $category = Category::find($id);
        if ($category) {
            return view('admin.pages.category.edit',compact('category'));
        }
    }

    public function update(Request $request,$id){

        $request->validate([
            'name'=>'required',
            'category_id'=>'required|numeric',
            'image'=>'required',
        ]);
        
        $category = Category::find($id); 

        if($request->has('image')){
            $path = $request->image->store('public/category');
        }else{
            $path = $category->image;
        }

        if ($category) {
            $category->update([
                'name' =>$request->name,
                'category_id' =>$request->category_id,
                'image' =>$path,
            ]);
            return redirect()->route('category.index')->with('message', 'Updated Successfully!');
        }
    }

    public function delete($id)
    {
      Category::find($id)->delete();
      return redirect()->route('category.index')->with('msg','Deleted.');
    }
}