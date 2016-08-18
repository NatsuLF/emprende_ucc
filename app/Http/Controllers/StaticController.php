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

    public function politics()
    {
        return view('politics');
    }

    public function services()
    {
        return view('servicios');
    }

    public function property()
    {
        return view('property');
    }

    public function testimony()
    {
        return view('testimony');
    }

}
