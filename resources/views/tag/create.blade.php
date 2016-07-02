@extends('layouts.dfm')

@section('content')
    <form action="{{ '/tags' }}" method="post" autocomplete="off">
        {{ csrf_field() }}
        @include('tag.form')

        <button type="submit" class="btn btn-primary"><i class="fa fa-plus-circle fa-fw" aria-hidden="true"></i>&nbsp; Crear</button>
    </form>

    @include('shared.message')

    @include('common.errors')
@endsection