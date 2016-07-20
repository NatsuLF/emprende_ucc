<?php

namespace App\Http\Controllers;

use DB;
use App\Tag;
use App\Post;

use App\Http\Requests;
use Illuminate\Http\Request;
use App\Http\Middleware\Session;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Input;
use app\Http\Middleware\Authenticate;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;
use Illuminate\Contracts\Auth\Authenticatable;

class PostController extends Controller
{
    public function index()
    {
        $posts = DB::table('posts')->get();

        return view('post.index', ['posts' => $posts]);
    }

    public function create()
    {
        $tags = DB::table('tags')->get();

        return view('post.create', ['tags' => $tags]);
    }

    public function store(Request $request)
    {
        $current_user = $request->user();

        $constraints = [
            'title' => 'required',
            'body' => 'required',
            'tags' => 'required'
        ];

        $validator = Validator::make($request->all(), $constraints);

        if ($validator->fails()) {
            return redirect('posts/create')
                ->withInput()
                ->withErrors($validator);
        }

        if (isset($request->published)) {
            $published = true;
        } else {
            $published = false;
        }

        $post = new Post;
        $post->user_id = $current_user->id;
        $post->title = $request->title;
        $post->body = $request->body;
        $post->published = $published;

        $post->save();
        $post->tags()->sync($request->tags);

        return redirect()->action('PostController@create')->with('message', 'Creado !');
    }

    public function blog()
    {
        $posts = Post::where('published', '=', TRUE)->orderBy('created_at', 'desc')->get();

        return view('news', ['posts' => $posts]);
    }

    public function edit(Post $post)
    {
        $post_tags = $post->tags->toArray();

        return view('post.edit', [
            'post' => $post,
            'tags' => DB::table('tags')->get(),
            'tags_id' => $this->get_tags_id($post_tags)
        ]);
    }

    public function update(Request $request, Post $post)
    {
        $current_user = $request->user();

        $rules = [
            'title' => 'required',
            'body' => 'required',
            'tags' => 'required'
        ];

        $validator = Validator::make($request->all(), $rules);

        if ($validator->fails()) {
            return redirect('posts/' . $post->id)
                ->withInput()
                ->withErrors($validator);
        }

        if (isset($request->published))
        {
            $published = true;
        } else
        {
            $published = false;
        }

        $post->title = $request->title;
        $post->published = $published;
        $post->body = $request->body;

        $post->tags()->detach();
        $post->tags()->sync($request->tags);
        $post->save();

        return redirect()->action('PostController@index')->with('message', 'Actualizado !');
    }

    public function delete(Post $post)
    {
        $post->delete();

        return redirect()->action('PostController@index')->with('message', 'Eliminado !');
    }

    public function details(Post $post)
    {
        $posts = Post::where('id', '=', $post->id)->get();

        return view('detail_post', ['posts' => $posts]);
    }

    private function get_tags_id($tags)
    {
        $data = array_map(function($tag) {
            return $tag['id'];
        }, $tags);

        return $data;
    }
}