<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ImagesRequest;
use App\Gestion\PhotoGestionInterface;



class PhotoController extends Controller
{
    public function get()
	{
		return view('photo');
	}

    public function post(
		ImagesRequest $request,
		PhotoGestionInterface $photogestion)
	{

		if($photogestion->save($request->file('image'))) {
			return view('photo_ok');
		}
		return redirect('photo')
			->with('error','Désolé mais votre image ne peut pas être envoyée !');

	}
}
