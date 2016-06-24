<?php

namespace App\Http\Controllers;

// use Mail;
use Illuminate\Support\Facades\Mail;
use App\Http\Middleware\Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Redirect;
use App\Http\Controllers\Controller;

class MailController extends Controller
{
    public function sendMail(Request $request)
    {
        $rules = array(
            'name' => 'required',
            'mail' => 'required|email',
            'body' => 'required'
        );

        $validator = Validator::make($request->all(), $rules);

        if ($validator->fails()) {
            $messages = $validator->messages();

            echo $messages;

            return redirect('contacto');
        }

        $name = $request->input('name');
        $mail = $request->input('mail');
        $body = $request->input('body');

        Mail::send('emails.contact', ['name' => $name, 'mail' => $mail, 'body' => $body], function($m)
        {
            $m->to('leodota7@gmail.com')->subject('Proyecto Tranferencia Tecnologica Apicola - UCC');
        });

        return view('greeting');
    }
}