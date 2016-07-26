@extends('layouts.master')

@section('title', 'Posts')


@section('content')
    <div class="col-md-10">
        @foreach ($posts as $post)
            <div class="jumbotron">
                <h1>{{ $post->title }}</h1>
                    <cite>{{ $post->user->name }}</cite>
                    <small> {{ $post->created_at->format('M j, Y') }}</small>
                @foreach ($post->tags as $tag)
                    <span class="label label-success">{{ $tag->name }}</span>
                @endforeach

                <p>{!! $post->body !!}</p>
            </div>
        @endforeach
    </div>


    <div class="shared-social col-md-2">
        <div id="shareBtn" class="btn">
            <img src="https://dl.dropboxusercontent.com/s/t14flahpj3e0wd4/facebook500.png?dl=0" width="32px" height="32px" alt="Share on facebook">
        </div>
        <div class="">
            <a
                href="https://plus.google.com/share?url={{ 'http://localhost' . $_SERVER['REQUEST_URI'] }}"
                class="btn"
                onclick="javascript:window.open(this.href,'', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=600,width=600');
                return false;">
                <img src="https://www.gstatic.com/images/icons/gplus-32.png" alt="Share on Google+"/>
            </a>
         </div>
    </div>
@endsection