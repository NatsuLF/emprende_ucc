@extends('layouts.dfm')

@section('content')
    <form action="{{ '/tags/' . $tag->id }}" method="post" autocomplete="off">
        {{ csrf_field() }}
        <input type="hidden" name="id">
        @include("tag.form")

        <button type="submit" class="btn btn-primary">Actualizar</button>
    </form>
@endsection