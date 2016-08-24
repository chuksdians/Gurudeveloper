<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\contact;

class HomeController extends Controller
{
    public function index(){
        return view('home');

    }
    public function contact(){
        return view('home');
    }
    public function postContact(Request $request){
        $contact= new contact();
        $contact->Name=$request->input('Name');
        $contact->Email=$request->input('Email');
        $contact->subject=$request->input('Subject');
        $contact->message=$request->input('Message');
        $contact->save();

        $to = "guru@thegurudeveloper.com";

        $subject = "message on your site";
        $txt = "A client  ".  $request->input('Name') .  " with the email  " . "\r\n " .$request->input('Email') .  " had a message  ".$request->input('Message');
        $headers = "From: Gurudeveloper <contact@gurudeveloperinc.com" . "\r\n" .
            "CC: toby.okeke@gmail.com" . "\r\n" .
            "REPLY-TO: " . $request->input('Email')  . "\r\n" ;

        mail($to,$subject,$txt,$headers);


        return redirect("#contact");
    }


}
