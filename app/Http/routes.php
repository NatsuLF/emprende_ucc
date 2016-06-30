<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

// Route::get('welcome/{locale?}', function ($locale) {
//     App::setLocale($locale);
// });

Route::get('/', function() {
    return view('home');
});

Route::get('/catalogo', function() {
    return view('catalogo');
});

Route::get('/servicios', function() {
    return view('servicios');
});

Route::get('/contacto', function() {
    return view('contacto');
});

// MAIL
Route::get('/contacto', 'ContactController@contact');

Route::post('sendMail', 'MailController@sendMail');

// TAGS
Route::get('tags', 'TagController@index');

Route::get('tags/create', 'TagController@create');

Route::post('tags', 'TagController@save');

Route::get('tags/{tag}', 'TagController@edit');

Route::post('tags/{tag}', 'TagController@update');

Route::delete('tags/{tag}', 'TagController@delete');