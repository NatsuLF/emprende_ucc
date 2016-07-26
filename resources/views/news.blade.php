@extends('layouts.master')

@section('title', 'Blog')

@section('content')
    <div class="col-md-12">
        <div class="well jumbotron">
            <h1>{{ trans('messages.banner') }}</h1>

            <p>
                {{ trans('messages.banner_content') }}
            </p>
        </div>

        @if (count($posts) > 0)
            @foreach ($posts as $post)
                <br>
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        <div class="panel-title">
                            <i class="fa fa-caret-right" aria-hidden="true"></i>
                            {{ $post->title }}

                            <div class="pull-right">
                                @foreach ($post->tags as $tag)
                                    <span class="label label-success">{{ $tag->name }}</span>
                                @endforeach
                            </div>
                        </div>
                    </div>
                    <div class="panel-body">
                        <p>
                        {!! str_limit($post->body, 1000) !!}
                        </p>
                    </div>
                </div>

                <div class="clearfix">
                    <a href="{{ '/blog/' . $post->slug }}" class="btn btn-primary pull-right">
                        {{ trans('messages.btn_blog') }} <i class="fa fa-caret-square-o-right" aria-hidden="true"></i>
                    </a>
                </div>
            @endforeach
        @else
            <p>Nada que mostrar</p>
        @endif
    </div>
@endsection