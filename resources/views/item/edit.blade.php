@extends('layouts.items')

@section('title', 'Editar producto')

@section('content')
    <form action="{{ '/items/' . $item->id }}" id="form" method="post" autocomplete="off">
        {{ csrf_field() }}
        <input type="hidden" name="id">
        @include('item.form')

        <button type="submit" class="btn btn-primary">Actualizar</button>
    </form>

    @include('shared.message')
    @include('common.errors')
@endsection
