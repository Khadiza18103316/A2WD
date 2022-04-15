<?php

namespace App\Http\Controllers\Email;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\SendEmail;

class EmailController extends Controller
{
    public function send(Request $request){
        $contact_data = [];
        $contact_data['name'] = $request->input('name');
        $contact_data['email'] = $request->input('email');
        $contact_data['subject'] = $request->input('subject');
        $contact_data['message'] = $request->input('message');

        Mail::to('khadiza18103316@gmail.com')->send(new SendEmail($contact_data));

        return redirect()->back()->with('success', 'Email has been sent!');
    }
}