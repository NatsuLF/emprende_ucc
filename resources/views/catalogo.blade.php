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

                    <a href="#">Detalle</a>
                </div>

                <div class="col-md-6">
                    <div style="overflow: hidden; height: 50%; ">
                        <img src="{{ $item->images[0]->url }}" alt="">
                    </div>
                </div>
            </div>
        </div>
    @endforeach
@endsection
