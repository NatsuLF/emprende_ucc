<?php

use Illuminate\Support\Facades\Input;
use Illuminate\Http\Request;

Route::get('lang/{lang}', ['as'=>'lang.switch', 'uses'=>'LanguageController@switchLang']);

Route::get('/contacto', function() {
    return view('contacto');
});

Route::get('/login', function() {
    return view('/auth/login');
});

// STATIC
Route::get('/', 'StaticController@about');

Route::get('/services', 'StaticController@services');

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

// POST - Public
Route::get('blog', 'PostController@blog');

Route::get('about', 'HomeController@index');

Route::get('/blog/{slug}', 'PostController@details');

// POST - Auth
Route::get('posts', ['uses' => 'PostController@index', 'middleware' => 'auth']);

Route::get('posts/create', ['uses' => 'PostController@create', 'middleware' => 'auth']);

Route::post('posts', ['uses' => 'PostController@store', 'middleware' => 'auth']);

Route::get('posts/{post}', ['uses' => 'PostController@edit', 'middleware' => 'auth']);

Route::post('posts/{post}', ['uses' => 'PostController@update', 'middleware' => 'auth']);

Route::delete('posts/{post}', ['uses' => 'PostController@delete', 'middleware' => 'auth']);

// ITEMS - Public
Route::get('catalogo', 'ItemController@catalogo');

Route::get('/catalogo/{slug}', 'ItemController@detail_prod');

// ITEMS - Auth
Route::get('items', ['uses' => 'ItemController@index', 'middleware' => 'auth']);

Route::get('items/create', ['uses' => 'ItemController@create', 'middleware' => 'auth']);

Route::post('items', ['uses' => 'ItemController@store', 'middleware' => 'auth']);

Route::get('items/{item}', ['as' => 'item_edit', 'uses' => 'ItemController@edit', 'middleware' => 'auth']);

Route::post('items/{item}', ['uses' => 'ItemController@update', 'middleware' => 'auth']);

Route::delete('items/{item}', ['uses' => 'ItemController@delete', 'middleware' => 'auth']);

Route::get('/images/remove/{image}', ['as' => 'remove_image', 'uses' => 'ImageController@delete', 'middleware' => 'auth']);

// USERS
Route::get('user/profile', [
    'as' => 'profile',
    'uses' => 'UserController@profile',
    'middleware' => 'auth'
]);

Route::post('user/profile', [
    'uses' => 'UserController@update_profile',
    'middleware' => 'auth'
]);

Route::get('user/password', [
    'as' => 'password',
    'uses' => 'UserController@password',
    'middleware' => 'auth'
]);

Route::post('user/update_password', [
    'uses' => 'UserController@update_password',
    'middleware' => 'auth'
]);