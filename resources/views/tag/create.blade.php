@extends('layouts.dfm')

@section('content')
    <form action="{{ '/tags' }}" method="post" autocomplete="off">
        {{ csrf_field() }}
        @include('tag.form')

        <button type="submit" class="btn btn-primary">Crear</button>
    </form>

    @include('shared.message');

    @include('common.errors')
@endsection