<?php

namespace App\Http\Controllers;

use Hash;
use App\User;
use Validator;
use App\Http\Requests;
use Illuminate\Http\Request;
use Illuminate\Routing\Route;
use App\Http\Middleware\Session;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Input;
use app\Http\Middleware\Authenticate;
use Illuminate\Support\Facades\Redirect;
// use Illuminate\Support\Facades\Validator;
//use Illuminate\Contracts\Auth\Authenticatable;

class UserController extends Controller
{
    public function profile(Route $route, Request $request)
    {
        $action = $route->getName();
        $current_user = $request->user();

        return view('users.profile', ['action' => $action, 'current_user' => $current_user]);
    }

    public function update_profile(Request $request)
    {
        $current_user = $request->user();
        // $data = User::where('email', '=', $request->email)->first();
        $rules = [
            'name' => 'required',
            'email' => 'required|email|unique:users,email,' .$current_user->id,
        ];

        $messages = [
            'required' => 'Todos los campos son requeridos.',
            'email' => 'El campo ingresado no es de tipo email.',
            'unique' => 'El nombre o correo ya existen.',
        ];

        $validator = Validator::make($request->all(), $rules, $messages);
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator);
        }

        $current_user->name = $request->name;
        $current_user->email = $request->email;

        $current_user->save();

        return redirect()->back()->with('message', 'Actualizado !');
    }

    public function password(Route $route, Request $request)
    {
        $action = $route->getName();
        $current_user = $request->user();

        return view('users.password', ['action' => $action, 'current_user' => $current_user]);
    }

    public function update_password(Request $request)
    {
        $current_user = $request->user();

        $rules = [
            'currentPassword' => 'hash:' . $current_user->password,
            'newPassword' => 'required|same:confirmPassword',
            'confirmPassword' => 'required'
        ];

        $messages = [
            'hash' => 'Clave actual incorrecta',
            'required' => 'Todos los campos son requeridos.',
            'same' => 'Nueva contraseña y confirmar contraseña no coinsiden.'
        ];

        $validator = Validator::make($request->all(), $rules, $messages);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator->errors());
        }

        $current_user->password = Hash::make($request->newPassword);
        $current_user->save();

        return redirect()->back()->with('message', 'Actualizado !');
    }
}
