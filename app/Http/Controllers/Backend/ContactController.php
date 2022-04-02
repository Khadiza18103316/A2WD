<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    
    public function store(Request $request){
        
        $request->validate([
            'name'=>'required',
            'email'=>'required',
            'subject'=>'required',
            'msg'=>'required',
        ]);
        
        Contact::create([
            // field name for DB || field name for form
            'name' =>$request->name,
            'email' =>$request->email,
            'subject' =>$request->subject,
            'msg' =>$request->msg,
        ]);
        return redirect()->route('frontend.home')->with('success', 'Submitted Successfully!');
    }
}