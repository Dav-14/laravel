<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\ContactController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

/*
Route::get('/', ['as' => 'home', function () {
    return view('welcome');
}]);
*/
Route::get('/', [WelcomeController::class, 'index'])->name('home');


/*
Route::get('{n}', function ($n) {
    return response("Je suis la page " . $n . " !", 200);
})->where('n', '[1-3]');

Route::get('{n}', function ($n) {
    return Response::make("Je suis la page " . $n . " !", 200);
})->where('n', '[1-3]');


Route::get('article/{n}', function ($n) {
    return view('article')->with('numero', $n);
})->where('n', '[1-9]+');
*/
Route::get('users', [UsersController::class, 'getInfos']);
Route::post('users', [UsersController::class, 'postInfos']);

Route::get('contact', [ContactController::class, 'get']);
Route::post('contact', [ContactController::class, 'post']);


Route::get('article/{n}', [ArticleController::class, 'show'])->where('n', '[0-9]+');

Route::get('facture/{n}', function ($n) {
    return view('facture', [
        'numero' => $n
    ]);
})->where('n', '[1-9]+');

//app('router')->get('/', function() {return 'coucou';});
