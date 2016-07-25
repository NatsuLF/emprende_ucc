@extends('layouts.master')

@section('title', 'Blog')

@section('content')
    <div class="well jumbotron">
        <div class="container-fluid">
            <h1>Hola, Bienvenido !!!</h1>
            <p>En esta area podras informarte acerca de las diversas actividades que realizamos,
            ademas de publicar contenidos que te ayudaran a entender de que se trata la apicultura.
            Esperemos que disfrutes de nuestro pequeño Blog !!!</p>
        </div>
    </div>

    @if (count($posts) > 0)
        @foreach ($posts as $post)
            <div class="col-md-8 col-sm-6 col-xs-4">
                <div class="panel panel-primary panel-news">
                    <div class="panel-heading">
                        <h3 class="panel-title">
                            <i class="fa fa-caret-right" aria-hidden="true"></i>
                            {{ $post->title }}
                        </h3>
                        <p>
                            @foreach ($post->tags as $tag)
                                <span class="label label-success">{{ $tag->name }}</span>
                            @endforeach
                        </p>
                    </div>
                    <div class="panel-body">
                        <p>
                        {!! $post->body !!}
                        </p>
                    </div>
                </div>
                <div class="form-gruop btn-read_more">
                    <a href="{{ '/blog/' . $post->slug }}" class="btn btn-primary">
                    Seguir leyendo <i class="fa fa-caret-square-o-right" aria-hidden="true"></i>
                    </a>
                </div>
            </div>
        @endforeach
    @else
            <p>Nada que mostrar</p>
    @endif
@endsection