@extends('layouts.app_backend')

@section('content')
    @if (count($tags) > 0)
        <table class="table table-striped table-hover table-bordered">
            <thead>
                <th>Etiquetas</th>
                <th width="1"></th>
            </thead>
            <tbody>
                @foreach ($tags as $tag)
                    <tr>
                        <td>
                            <a href="{{ 'tags/' .$tag->id }}">
                                {{ $tag->name }}
                            </a>
                        </td>
                        <td>
                            <form action="{{ url('tags/'.$tag->id) }}" method="post">
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