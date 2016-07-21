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

class ImageController extends Controller
{
    public function delete(Image $image)
    {
        $item = Item::find($image->item_id);

        if (count($item->images) > 1) {
            $image->delete();
        }

        return redirect()->route('item_edit', ['id' => $image->item_id]);
    }
}

