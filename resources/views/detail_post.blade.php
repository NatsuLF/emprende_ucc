@extends('layouts.master')

@section('title', 'Posts')


@section('content')
    <div id="fb-root"></div>
    <script>
        (function(d, s, id) {
            var js, fjs = d.getElementsByTagName(s)[0];

            if (d.getElementById(id)) return;

            js = d.createElement(s); js.id = id;
            js.src = "//connect.facebook.net/es_LA/all.js#xfbml=1&appId=139235976512710";
            fjs.parentNode.insertBefore(js, fjs);
        }(document, 'script', 'facebook-jssdk'));
    </script>

    <div class="col-md-10">
        @foreach ($posts as $post)
            <div class="jumbotron">
            <a class="btn btn-success"
            href="{{ url()->previous() . '#' . $post->slug }}">
                {{ trans('messages.btn_go_back_post') }}
            </a>
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

    <div class="shared-social">
        <div class="fb-share-button"
            data-href="{{ Request::url() }}"
            data-layout="button_count">
        </div>
        <br><br>
            <a href="https://plus.google.com/share?url={'{{ Request::url() }}'}" onclick="javascript:window.open(this.href,
               '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=600,width=600');
               return false;">
               <img src="https://www.gstatic.com/images/icons/gplus-32.png" alt="Share on Google+"/>
            </a>
    </div>
@endsection