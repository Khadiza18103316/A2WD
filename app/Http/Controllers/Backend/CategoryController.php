<?php

namespace App\Http\Controllers\Backend;
use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CategoryController extends Controller
{
    public function index(){
        $categories =Category::latest('id')->where('deleted', 'no')->get();
        return view ('admin.pages.category.index', compact('categories'));
    }

    public function create(){
        return view ('admin.pages.category.create');
    }

    public function store(Request $request){

        $request->validate([
            'name'=>'required',
        ]);

        Category::create([
            // field name for DB || field name for form
            'name' =>$request->name,
        ]);
        return redirect()->route('category.index')->with('success', 'Category Created Successfully!');
    }

    public function edit($id)
    {
        $category = Category::find($id);
        if ($category) {
            return view('admin.pages.category.edit',compact('category'));
        }
    }

    public function update(Request $request,$id){

        $category = Category::find($id);

        if ($category) {
            $category->update([
                'name' =>$request->name,
            ]);
            return redirect()->route('category.index')->with('message', 'Category Updated Successfully!');
        }
    }

    public function delete($id)
    {
      $category=Category::find($id);
      $category->name. 'deleted' .$id;
      $user = Auth::id();
      $category->deleted_by = $user;
      $category->deleted = 'yes';
      $category->status = 'Inactive';
      $category->save();

     return redirect()->route('category.index')->with('msg','Category Deleted Successfully!');
    }
}
