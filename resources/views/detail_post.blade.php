@extends('layouts.master')

@section('content')
    <div class="col-md-11">
        @foreach ($posts as $post)
            <div class="jumbotron">
                <div class="">
                <h1>{{ $post->title }}</h1>
                <cite>{{ $post->user->name }}</cite>
                <small> {{ $post->created_at->format('M j, Y') }}</small>
                @foreach ($post->tags as $tag)
                    <span class="label label-success">{{ $tag->name }}</span>
                @endforeach
            </div>
                <p>{!! $post->body !!}</p>
            </div>
        @endforeach
    </div>

    <div class="shared-social col-md-1">
        <span class="fa-stack fa-lg">
            <i class="fa fa-facebook-square fa-stack-2x"></i>
        </span>
        <span class="fa-stack fa-lg">
            <i class="fa fa-google-plus-official fa-stack-2x"></i>
        </span>
    </div>
@endsection