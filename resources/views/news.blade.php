@extends('layouts.master')

@section('content')
    <div class="jumbotron">
        <div class="container-fluid">
            <h1>Hola, Bienvenid@ !!!</h1>
            <p>En esta area podras informarte acerca de las diversas actividades que realizamos,
            ademas de publicar contenidos que te ayudaran a entender de que se trata la apicultura. Esperemos que disfrutes de nuestro pequeño Blog !!!</p>
        </div>
    </div>

@if (count($posts) > 0  )
    @foreach ($posts as $post)
    <div class="container-fluid">
        <div class="col-md-8">
            <div class="panel panel-info">
                <div class="panel-heading">
                    <h3 class="panel-title">{{ $post->title }}</h3>
                    <div class="tags">
                        {{-- {{ $post->tags->name }} --}}
                    </div>
                </div>
                <div class="panel-body">
                    <p>
                    {!! $post->body !!}
                    </p>
                </div>
            </div>
        </div>
    </div>
@endforeach
@else
        <p>Nada que mostrar</p>
@endif

@endsection