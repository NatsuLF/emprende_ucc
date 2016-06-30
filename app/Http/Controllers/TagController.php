<?php

namespace App\Http\Controllers;

use DB;
use App\Tag;

use App\Http\Requests;
use Illuminate\Http\Request;
use App\Http\Middleware\Session;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;

class TagController extends Controller
{
    public function index()
    {
        $tags = DB::table('tags')->get();
        return view('tag.index', ['tags' => $tags]);
    }

    public function create(Request $request)
    {
        return view('tag.create');
    }

    public function save(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required',
        ]);


        if ($validator->fails())
        {
            return redirect('tag.create')
                ->withInput()
                ->withErrors($validator);
        }

        $tags = new Tag;
        $tags->name = $request->name;
        $tags->save();

        return redirect()->action('TagController@create')->with('message', 'Creado correctamente!');
    }

    public function edit(Tag $tag)
    {
        return view('tag.edit', ['tag' => $tag]);
    }

    public function update(Request $request, Tag $tag)
    {
        $rules = [
            'name' => 'required'
        ];

        $validator = Validator::make($request->all(), $rules);

        if ($validator->fails())
        {
            return redirect('tags/' . $tag)
                ->withInput()
                ->withErrors($validator);
        }

        $tag->name = $request->name;
        $tag->save();

        return redirect()->action('TagController@index')->with('message', 'Actualizado!');
    }

    public function delete(Tag $tag)
    {
        $tag->delete();

        return redirect()->action('TagController@index')->with('message', 'Eliminado!');
    }
}

