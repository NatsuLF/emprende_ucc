<?php

use Illuminate\Support\Facades\Input;
use Illuminate\Http\Request;

Route::get('/', function() {
    return view('news');
});

Route::get('/nosotros', function() {
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

Route::get('blog', 'HomeController@index');

// POST
Route::get('/', 'PostController@blog');

Route::get('/blog/{post}', 'PostController@details');

Route::get('posts', ['uses' => 'PostController@index', 'middleware' => 'auth']);

Route::get('posts/create', ['uses' => 'PostController@create', 'middleware' => 'auth']);

Route::post('posts', ['uses' => 'PostController@store', 'middleware' => 'auth']);

Route::get('post/{post}', ['uses' => 'PostController@edit', 'middleware' => 'auth']);

Route::post('post/{post}', ['uses' => 'PostController@update', 'middleware' => 'auth']);

Route::delete('post/{post}', ['uses' => 'PostController@delete', 'middleware' => 'auth']);