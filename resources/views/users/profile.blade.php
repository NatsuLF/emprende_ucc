@extends('layouts.dfm')

@section('title', 'Perfil de usuario')

@section('content')
    <div class="text-center">
        <img src="https://pbs.twimg.com/profile_images/636801097550557184/SOeLxnO0.png" alt="" class="img-circle" width="10%">
        <p>{{ $current_user->name }}
        <br>
        <small>{{ $current_user->email }}</small>
        </p>
    </div>

    <ul class="nav nav-tabs tabs">
        <li role="presentation" class="{{ $action == 'profile' ? 'active' : '' }}">
            <a href="{{ url('user/profile') }}" role="tab">Perfil</a>
        </li>
        <li role="presentation" class="{{ $action == 'password' ? 'active' : '' }}">
            <a href="{{ url('user/password') }}" role="tab">Cambiar contraseña</a>
        </li>
    </ul>

    <form action="{{ '/user/profile' }}" method="post" autocomplete="off" novalidate>
        {{ csrf_field() }}
        <div class="form-group">
            <label for="name">Nombre</label>
            <input id="name" name="name" value="{{ $current_user->name }}" class="form-control" required>
        </div>

        <div class="form-group">
            <label for="email">Correo</label>
            <input type="email" id="email" class="form-control" name="email" value="{{ $current_user->email }}" required>
        </div>

        <div class="form-group">
            <button type="submit" class="btn btn-primary">Actualizar</button>
        </div>
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

