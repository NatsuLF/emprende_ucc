@extends('layouts.dfm')

@section('content')
    <form action="{{ '/tags' }}" method="post">
        {{ csrf_field() }}
        @include('tag.form')

        <button type="submit" class="btn btn-primary">Crear</button>
    </form>

    @include('common.errors')
@endsection