<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\setting;
use Illuminate\Http\Request;

class SettingController extends Controller
{
    public function index(){
        $settings =Setting::paginate(5);
        return view ('admin.pages.setting.index',compact('settings'));
    }

    public function create(){
        return view ('admin.pages.setting.create');
    }

    public function store(Request $request){

        $request->validate([
            'logo_text'=>'required',
            'address'=>'required',
            'image'=>'required',
            'mbl_num'=>'required',
            'alt_num'=>'required',
            'link'=>'required',
            'footer_text'=>'required',
            'location'=>'required',
            'email'=>'required',

        ]);

        $path = $request->image->store('public/setting');
        setting::create([
            // field name for DB || field name for form
            'logo_text' =>$request->logo_text,
            'address' =>$request->address,
            'mbl_num' =>$request->mbl_num,
            'alt_num' =>$request->alt_num,
            'link' =>$request->link,
            'footer_text' =>$request->footer_text,
            'location' =>$request->location,
            'email' =>$request->email,
            'image' =>$path,
        ]);
        return redirect()->route('setting.index')->with('success', 'Created Successfully!');
    }

    public function details($id)
    {
      $setting=Setting::find($id);
      return view ('admin.pages.setting.details',compact('setting'));
    }

    public function edit($id)
    {
        $setting = Setting::find($id);
        if ($setting) {
            return view('admin.pages.setting.edit',compact('setting'));
        }
    }

    public function update(Request $request,$id){

        $request->validate([
            'address'=>'required',
            'image'=>'required',
            'mbl_num'=>'required',
            'alt_num'=>'required',
            'link'=>'required',
            'footer_text'=>'required',
            'location'=>'required',
            'email'=>'required',

        ]);

        $setting = Setting::find($id);

        if($request->has('image')){
            $path = $request->image->store('public/setting');
        }else{
            $path = $setting->image;
        }

        if ($setting) {
            $setting->update([
                'logo_text' =>$request->logo_text,
                'address' =>$request->address,
                'mbl_num' =>$request->mbl_num,
                'alt_num' =>$request->alt_num,
                'link' =>$request->link,
                'footer_text' =>$request->footer_text,
                'location' =>$request->location,
                'email' =>$request->email,
                'image' =>$path,
            ]);
            return redirect()->route('setting.index')->with('message', 'Updated Successfully!');
        }
    }

    public function delete($id)
    {
      Setting::find($id)->delete();
      return redirect()->route('setting.index')->with('msg','Deleted.');
    }
}
