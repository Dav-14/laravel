<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function get(){
        return view('infos');
    }


    public function post(Request $request){
        return 'le nom est ' . $request->input('nom');
    }
}
