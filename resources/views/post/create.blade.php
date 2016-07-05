@extends('layouts.dfmf')

@section('content')
    <form action="{{ '/posts' }}" id="form" method="post" autocomplete="off">
        {{ csrf_field() }}
        @include('post.form')

        <div class="form-group">
            <button type="submit" id="borrador" class="btn btn-primary">Guardar como borrador</button>
        </div>
    </form>

    @include('shared.message')
    @include('common.errors')
@endsection

@section('tags')
    @include('shared.tags')
@endsection