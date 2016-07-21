@extends('layouts.master')

@section('title', 'Catalogo')

@section('content')


<div class="row">
    @foreach ($items as $item)
    <div class="col-md-3">
    </div>
        <div class="items col-md-4">
            <h4 class="">{{ $item->name }}</h4>
                    <ul>
                        <li>{{ $item->description }}</li>
                    </ul>
                <p>
                    <cite>{{ '$ ' . $item->price }}</cite>
                </p>
        </div>
        <div class="row">
            <div class="album-cat col-md-2">
                <img class="album-cat" src="{{ $item->images[0]->url }}" alt="{{ $item->images }}">
            </div>
        </div>
    @endforeach
</div>
@endsection
