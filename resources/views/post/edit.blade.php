@extends('layouts.dfmf')

@section('title', 'Editar post')

@section('content')
    <form action="{{ '/posts/' . $post->id }}" id="form" method="post" autocomplete="off">
        {{ csrf_field() }}
        <input type="hidden" name="id">
        @include('post.form')

        <div class="form-group">
            <button type="submit" class="btn btn-primary">Actualizar</button>
        </div>
    </form>

    @include('shared.message')
    @include('common.errors')
@endsection

@section('tags')
    @include('shared.tags')
@endsection