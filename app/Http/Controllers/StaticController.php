<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class StaticController extends Controller
{
    public function about()
    {
        return view('home_app');
    }

    public function services()
    {
        return view('servicios');
    }
}
