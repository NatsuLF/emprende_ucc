@extends('layouts.master')

@section('title', 'Catalogo')

@section('content')
    @foreach ($items as $item)
        <div class="well" id="{{ $item->slug }}">
            <div class="row">
                <div class="col-md-6">
                    <h4 class=""><i class="fa fa-arrow-right" aria-hidden="true"></i>
                    {{ $item->name }}</h4>
                    <small>Descripcion</small>
                    <p>{{ $item->description }}</p>

                    <small>Precio</small>
                    <p>{{ '$ ' . $item->price }}</p>

                    <a class="btn btn-info" href="{{ url('catalogo' . '/' . $item->slug) }}">
                        {{ trans('messages.btn_catalog') }}
                    </a>
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

@section('footer')
    @include('shared.footer')
@endsection