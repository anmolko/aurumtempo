<?php

namespace App\Http\Controllers;

use App\Mail\ContactDetail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class SendEmailController extends Controller
{
    function send(Request $request)
    {

//        $this->validate($request, [
//            'name'     =>  'required',
//            'email'  =>  'required|email',
//            'message' =>  'required'
//        ]);

        $data = array(
            'name'      =>  $request->name,
            'message'   =>   $request->message,
            'msg_subject' =>   $request->msg_subject,
            'email' =>   $request->email,
            'phone_number' =>   $request->phone_number,
        );
        //  Mail::to('surajmzn75@gmail.com')->send(new ContactDetail($data));

        Mail::to('info@ihrhs.com')->cc(['suraj@canosoft.com.np','info@canosoft.com.np'])->send(new ContactDetail($data));
        return back()->with('success', 'Thanks for contacting us!');

    }
}
