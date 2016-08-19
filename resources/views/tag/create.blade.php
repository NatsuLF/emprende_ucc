@extends('layouts.dfm')

@section('title', 'Agregar categoria')

@section('content')
    <form action="{{ '/tags' }}" method="post" autocomplete="off">
        {{ csrf_field() }}
        @include('tag.form')

        <button type="submit" class="btn btn-primary"><i class="fa fa-plus-circle fa-fw" aria-hidden="true"></i>&nbsp; Crear</button>
    </form>
    <br>
    @include('shared.message')
    @include('common.errors')
@endsection