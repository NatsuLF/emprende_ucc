<?php

namespace App\Http\Controllers;

use DB;
use App\Tag;
use App\Post;

use App\Http\Requests;
use Illuminate\Http\Request;
use App\Http\Middleware\Session;
use Illuminate\Support\Facades\Input;
use app\Http\Middleware\Authenticate;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;

class PostController extends Controller
{
    public function index()
    {
        $post = DB::table('post')->get();

        return view('post.index', ['post' => $post]);
    }

    public function create()
    {
        $tags = DB::table('tags')->get();

        return view('post.create', ['tags' => $tags]);
    }

    public function store(Request $request)
    {
        dd($request->all());
        return redirect()->action('PostController@create');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
