<?php

use Illuminate\Support\Facades\Input;
use Illuminate\Http\Request;

Route::get('/', function() {
    return view('home_app');
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

Route::get('/login', function() {
	return view('/auth/login');
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

// AUTH
Route::auth();

Route::get('home_app', 'HomeController@index');

// POST
Route::get('posts', 'PostController@index');

Route::get('posts/create', 'PostController@create');

Route::post('posts', 'PostController@store');

Route::get('post/{post}', 'PostController@edit');

Route::post('post/{post}', 'PostController@update');

Route::delete('post/{post}', 'PostController@delete');