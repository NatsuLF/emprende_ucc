@extends('layouts.dfmf')

@section('content')
    <form action="{{ '/post/' . $post->id }}" id="form" method="post" autocomplete="off">
        {{ csrf_field() }}
        <input type="hidden" name="id">
        @include('post.form')

        <button type="submit" class="btn btn-primary">Actualizar</button>
    </form>

    @include('shared.message')
    @include('common.errors')
@endsection

@section('tags')
    @include('shared.tags')
@endsection