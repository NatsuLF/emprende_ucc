@extends('layouts.dfmf')

@section('title', 'Agregar post')

@section('content')
    <form action="{{ '/posts' }}" id="form" method="post" autocomplete="off">
        {{ csrf_field() }}
        @include('post.form')

        <div class="form-group">
            <button type="submit" id="borrador" class="btn btn-primary">Guardar como borrador</button>
        </div>
    </form>
    <br>
    @include('shared.message')
    @include('common.errors')
@endsection

@section('tags')
    @include('shared.tags')
@endsection