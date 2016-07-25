@extends('layouts.master')

@section('title', 'Catalogo')

@section('content')
    @foreach ($items as $item)
        <div class="well">
            <div class="row">
                <div class="col-md-6">
                    <h4 class="">{{ $item->name }}</h4>

                    <small>Descripcion</small>
                    <p>{{ $item->description }}</p>

                    <small>Precio</small>
                    <p>{{ '$ ' . $item->price }}</p>

                    <a class="btn btn-info" href="{{ url('/catalogo/' .$item->slug) }}">Detalle</a>
                </div>

                <div class="col-md-6">
                    <div style="overflow: hidden; height: auto; max-height: 500px; ">
                        <img src="{{ $item->images[0]->url }}" alt="">
                    </div>
                </div>
            </div>
        </div>
    @endforeach
@endsection
