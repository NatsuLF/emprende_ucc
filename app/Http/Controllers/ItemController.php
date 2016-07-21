<?php

namespace App\Http\Controllers;

use DB;
use App\Item;
use App\Image;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Http\Middleware\Session;
use Illuminate\Support\Collection;
use app\Http\Middleware\Authenticate;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;
use Illuminate\Contracts\Auth\Authenticatable;
use App\Http\Requests;

class ItemController extends Controller
{
    public function index()
    {
        $items = DB::table('items')->get();

        return view('item.index', ['items' => $items]);
    }

    public function create()
    {
        $items = DB::table('items')->get();
        return view('item.create', ['items' => $items]);
    }

    public function store(Request $request)
    {
        $current_user = $request->user();

        $rules = [
            'name' => 'required',
            'description' => 'required',
            'price' => 'required',
            'url' => 'required'
        ];

        $validator = Validator::make($request->all(), $rules);

        if ($validator->fails())
        {
            return redirect('items/create')
                ->withInput()
                ->withErrors($validator);
        }

        $item = new Item;
        $item->name = $request->name;
        $item->price = $request->price;
        $item->user_id = $current_user->id;
        $item->description = $request->description;
        $images = $request->url;
        $imageList = [];

        if ($this->areValidUrl($images)) {
            foreach ($images as $image)
            {
                $imageList[] = new Image(['url' => $image]);
            }
        }

        $item->save();
        $item->images()->saveMany($imageList);

        return redirect()->action('ItemController@create')->with('message', 'Creado !');
    }


    public function edit(Item $item)
    {
        return view('item.edit', ['item' => $item,]);
    }

    public function update(Request $request, Item $item)
    {
        $current_user = $request->user();

        $rules = [
            'name' => 'required',
            'description' => 'required',
            'price' => 'required',
            'url' => 'required'
        ];

        $validator = Validator::make($request->all(), $rules);

        if ($validator->fails())
        {
            return redirect('/items/' . $item->id)
                ->withInput()
                ->withErrors($validator);
        }

        $item->name = $request->name;
        $item->description = $request->description;
        $item->price = $request->price;
        $images = $request->url;
        $imageList = [];

        if ($this->areValidUrl($images))
        {
            foreach ($images as $image)
            {
                $imageList[] = new Image(['url' => $image]);
            }
        }

        $item->images()->delete();

        $item->images()->saveMany($imageList);
        $item->save();

        return redirect()->action('ItemController@index')->with('message', 'Actualizado !');
    }

    public function catalogo()
    {
        $items = Item::orderBy('created_at', 'desc')->get();

        return view('catalogo', ['items' => $items]);
    }

    public function delete(Item $item)
    {
        $item->delete();
        $item->images()->delete();

        return redirect()->action('ItemController@index')->with('message', 'Eliminado !');
    }

    public function detail_prod(Item $item)
    {
        return view('detail_items', ['item' => $item]);
    }

    private function areValidUrl($images)
    {
        foreach ($images as $img)
        {
            if (!$this->isValidUrl($img))
            {
                return false;
            }
        }

        return true;
    }

    private function isValidUrl($url)
    {
        if (!filter_var($url, FILTER_VALIDATE_URL))
        {
            return false;
        }

        return true;
    }
}