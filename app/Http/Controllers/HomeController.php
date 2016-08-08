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
        $contact->Name=$request->input('name');
        $contact->Email=$request->input('email');
        $contact->message=$request->input('message');
        $contact->save();

        $to = "tobyokeke@gmail.com";
        $subject = "message on your site";
        $txt = "A client  ".  $request->input('name') .  " with the email  " . "\r\n " .$request->input('email') .  " had a message  ".$request->input('message');
        $headers = "From: AlpacinoExpress.com" . "\r\n" .
            "CC: tobyokeke@gmail.com";

        mail($to,$subject,$txt,$headers);


        return redirect("/contact");
    }

    public function services(){
        return view('welcome');

    }
    public function Gallery(){
        return view ('welcome');
    }

    public function about(){
        return view ('welcome');
    }
}
