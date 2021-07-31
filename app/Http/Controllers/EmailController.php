<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\http\Requests\EmailRequest;
use App\Repositories\EmailRepositoryInterface;

class EmailController extends Controller
{
    public function get(){
        return view("emails.email");
    }

    public function postEmail(EmailRequest $request, EmailRepositoryInterface $emailRepo){


        $emailRepo->save($request->input('email'));

        return view('emails.email_ok');
    }
}
