@extends('layouts.master')

@section('title', 'Posts')

@section('content')
    <div class="col-md-11">
        @foreach ($posts as $post)
            <div class="jumbotron">
                <a class="btn btn-success btn-back" href="{{ url()->previous() . '#' . $post->slug }}">
                    {{ trans('messages.btn_go_back_post') }}
                </a>

                <h2>{{ $post->title }}</h2>
                <cite>{{ $post->user->name }}</cite>
                <small> {{ $post->created_at->format('M j, Y') }}</small>

                @foreach ($post->tags as $tag)
                    <span class="label label-info">{{ $tag->name }}</span>
                @endforeach

                <p>{!! $post->body !!}</p>
            </div>
        @endforeach
    </div>

    <div class="col-md-1">
        <!-- Sharingbutton Facebook -->
        <a class="resp-sharing-button__link" href="https://facebook.com/sharer/sharer.php?u={{ Request::url() }}" target="_blank" aria-label="">
          <div class="resp-sharing-button resp-sharing-button--facebook resp-sharing-button--small">
            <div aria-hidden="true" class="resp-sharing-button__icon resp-sharing-button__icon--solid">
                <svg version="1.1" x="0px" y="0px" width="24px" height="24px" viewBox="0 0 24 24" enable-background="new 0 0 24 24" xml:space="preserve">
                    <g>
                        <path d="M18.768,7.465H14.5V5.56c0-0.896,0.594-1.105,1.012-1.105s2.988,0,2.988,0V0.513L14.171,0.5C10.244,0.5,9.5,3.438,9.5,5.32 v2.145h-3v4h3c0,5.212,0,12,0,12h5c0,0,0-6.85,0-12h3.851L18.768,7.465z"/>
                    </g>
                </svg>
            </div>
          </div>
        </a>

        <!-- Sharingbutton Google+ -->
        <a class="resp-sharing-button__link" href="https://plus.google.com/share?url={{ Request::url() }}" target="_blank" aria-label="">
          <div class="resp-sharing-button resp-sharing-button--google resp-sharing-button--small">
            <div aria-hidden="true" class="resp-sharing-button__icon resp-sharing-button__icon--solid">
                <svg version="1.1" x="0px" y="0px" width="24px" height="24px" viewBox="0 0 24 24" enable-background="new 0 0 24 24" xml:space="preserve">
                    <g>
                        <path d="M11.366,12.928c-0.729-0.516-1.393-1.273-1.404-1.505c0-0.425,0.038-0.627,0.988-1.368 c1.229-0.962,1.906-2.228,1.906-3.564c0-1.212-0.37-2.289-1.001-3.044h0.488c0.102,0,0.2-0.033,0.282-0.091l1.364-0.989 c0.169-0.121,0.24-0.338,0.176-0.536C14.102,1.635,13.918,1.5,13.709,1.5H7.608c-0.667,0-1.345,0.118-2.011,0.347 c-2.225,0.766-3.778,2.66-3.778,4.605c0,2.755,2.134,4.845,4.987,4.91c-0.056,0.22-0.084,0.434-0.084,0.645 c0,0.425,0.108,0.827,0.33,1.216c-0.026,0-0.051,0-0.079,0c-2.72,0-5.175,1.334-6.107,3.32C0.623,17.06,0.5,17.582,0.5,18.098 c0,0.501,0.129,0.984,0.382,1.438c0.585,1.046,1.843,1.861,3.544,2.289c0.877,0.223,1.82,0.335,2.8,0.335 c0.88,0,1.718-0.114,2.494-0.338c2.419-0.702,3.981-2.482,3.981-4.538C13.701,15.312,13.068,14.132,11.366,12.928z M3.66,17.443 c0-1.435,1.823-2.693,3.899-2.693h0.057c0.451,0.005,0.892,0.072,1.309,0.2c0.142,0.098,0.28,0.192,0.412,0.282 c0.962,0.656,1.597,1.088,1.774,1.783c0.041,0.175,0.063,0.35,0.063,0.519c0,1.787-1.333,2.693-3.961,2.693 C5.221,20.225,3.66,19.002,3.66,17.443z M5.551,3.89c0.324-0.371,0.75-0.566,1.227-0.566l0.055,0 c1.349,0.041,2.639,1.543,2.876,3.349c0.133,1.013-0.092,1.964-0.601,2.544C8.782,9.589,8.363,9.783,7.866,9.783H7.865H7.844 c-1.321-0.04-2.639-1.6-2.875-3.405C4.836,5.37,5.049,4.462,5.551,3.89z"/>
                        <polygon points="23.5,9.5 20.5,9.5 20.5,6.5 18.5,6.5 18.5,9.5 15.5,9.5 15.5,11.5 18.5,11.5 18.5,14.5 20.5,14.5 20.5,11.5  23.5,11.5     "/>
                    </g>
                </svg>
            </div>
          </div>
        </a>
    </div>
@endsection