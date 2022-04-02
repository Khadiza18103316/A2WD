<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Team;
use Illuminate\Http\Request;

class TeammatesController extends Controller
{
    public function index(){
        $teams =team::paginate(5);
        return view ('admin.pages.team.index',compact('teams'));
    }

    public function create(){
        return view ('admin.pages.team.create');
    }

    public function store(Request $request){
        
        $request->validate([
            'name'=>'required',
            'member_id'=>'required|numeric',
            'designation'=>'required',
            'image'=>'required',
        ]);
        
        $path = $request->image->store('public/team');
        team::create([
            // field name for DB || field name for form
            'name' =>$request->name,
            'member_id' =>$request->member_id,
            'designation' =>$request->designation,
            'image' =>$path,
        ]);
        return redirect()->route('team.index')->with('success', 'Created Successfully!');
    }

    public function details($id)
    {
      $team=Team::find($id);
      return view ('admin.pages.team.details',compact('team'));
    }

    public function edit($id)
    {
        $team = Team::find($id);
        if ($team) {
            return view('admin.pages.team.edit',compact('team'));
        }
    }

    public function update(Request $request,$id){

        $request->validate([
            'name'=>'required',
            'member_id'=>'required|numeric',
            'designation'=>'required',
            'image'=>'required',
        ]);
        
        $team = Team::find($id); 

        if($request->has('image')){
            $path = $request->image->store('public/team');
        }else{
            $path = $team->image;
        }

        if ($team) {
            $team->update([
            'name' =>$request->name,
            'member_id' =>$request->member_id,
            'designation' =>$request->designation,
            'image' =>$path,
            ]);
            return redirect()->route('team.index')->with('message', 'Updated Successfully!');
        }
    }

    public function delete($id)
    {
      Team::find($id)->delete();
      return redirect()->route('team.index')->with('msg','Deleted.');
    }
}