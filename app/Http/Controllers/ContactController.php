<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;
use App\Http\Requests\ContactRequest;

class ContactController extends Controller
{
    public function get(){
        return view('contact');
    }


    public function post(ContactRequest $request){

        Mail::send('emails.contact', $request->all(), function($message)
        {
            $message
            ->to('david.ragot14@orange.fr')
            ->subject('Contact')
            ->from('david.ragot14@gmail.com');//Devrais par defaut, dans .env MAIL_USERNAME
        });

        return view('confirm');
    }
}
