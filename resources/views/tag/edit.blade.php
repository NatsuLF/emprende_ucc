@extends('layouts.dfm')

@section('content')
    <form action="" method="post">
        <input type="hidden" name="id">
        @include("form");

        <button type="submit" class="btn btn-primary">Actualizar</button>
    </form>
@endsection