@extends('layouts.items')

@section('title', 'Agregar producto')

@section('content')
    <form action="{{ '/items' }}" id="form" method="post">
        {{ csrf_field() }}
        @include('item.form')

        <div class="form-group">
            <button type="submit" id="guardar" class="btn btn-primary">
            <i class="fa fa-floppy-o fa-lg" aria-hidden="true"></i>&nbsp; Guardar</button>
        </div>
    </form>

    @include('shared.message')
    @include('common.errors')
@endsection
