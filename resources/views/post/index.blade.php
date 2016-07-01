@extends('layouts.app_backend')

@section('content')
    @if (count($post) > 0)
        <table class="table table-striped table-hover table-bordered">
            <thead>
                <th>Etiquetas</th>
                <th width="1"></th>
            </thead>
            <tbody>
                @foreach ($post as $pts)
                    <tr>
                        <td>
                            <a class="post" href="{{ 'post/' .$pts->id }}">
                                {{ $pts->title }}
                            </a>
                        </td>
                        <td>
                            <form action="{{ url('post/'.$pts->id) }}" method="post">
                                {{ csrf_field() }}
                                {{ method_field('DELETE') }}

                                <button type="submit" class="btn btn-danger btn-xs">
                                    <i class="fa fa-trash"></i>
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