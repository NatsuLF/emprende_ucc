@extends('layouts.dfm')

@section('title', 'Cambiar contraseña')

@section('content')
    <div class="text-center">
        <img src="https://pbs.twimg.com/profile_images/636801097550557184/SOeLxnO0.png" alt="" class="img-circle" width="10%">
        <p>{{ $current_user->name }}
        <br>
        <small>{{ $current_user->email }}</small>
        </p>
    </div>
    @include('shared.user_navs')

    <form action="/user/update_password" method="POST" autocomplete="off" novalidate>
        {{ csrf_field() }}
        @include('shared.user_update_pass')

        <button type="submit" class="btn btn-primary">Actualizar</button>
    </form>

    @include('shared.message')

    @if (count($errors) > 0)
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
@endsection
