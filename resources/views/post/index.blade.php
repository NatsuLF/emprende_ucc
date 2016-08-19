@extends('layouts.app_backend')

@section('title', 'Posts')

@section('content')
    @if (count($posts) > 0)
        <table class="table table-striped table-hover table-bordered">
            <colgroup>
                <col span="1" style="width: 85%;">
                <col span="1" style="width: 5%;">
                <col span="1" style="width: 5%;">
                <col span="1" style="width: 5%;">
            </colgroup>
            <thead>
                <th colspan="4">Posts</th>
            </thead>
            <tbody>
                @foreach ($posts as $post)
                    <tr>
                        <td>
                            {{ $post->title }}
                        </td>
                        <td>
                            @if ($post->published == TRUE)
                                <i class="fa fa-check-square-o fa-lg fa-fw" aria-hidden="true"></i>
                            @else
                                <i class="fa fa-square-o fa-lg fa-fw" aria-hidden="true"></i>

                            @endif
                        </td>
                        <td>
                            <a class="btn btn-primary btn-xs" href="{{ 'posts/' .$post->id }}">
                            <i class="fa fa-pencil fa-lg" aria-hidden="true"></i>
                            </a>
                        </td>
                        <td>
                            <form action="{{ url('posts/'. $post->id) }}" method="post">
                                {{ csrf_field() }}
                                {{ method_field('DELETE') }}

                                <button type="submit" class="btn btn-danger btn-xs">
                                    <i class="fa fa-trash fa-lg"></i>
                                </button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>

        @include('shared.message')
    @else
        <p>Nada que mostrar</p>
    @endif
@endsection