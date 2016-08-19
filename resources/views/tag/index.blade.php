@extends('layouts.app_backend')

@section('title', 'Etiquetas')

@section('content')
    @if (count($tags) > 0)
        <table class="table table-striped table-hover table-bordered">
            <colgroup>
                <col span="1" style="width: 90%;">
                <col span="1" style="width: 5%;">
                <col span="1" style="width: 5%;">
            </colgroup>
            <thead>
                <th colspan="3">Categorias</th>
            </thead>
            <tbody>
                @foreach ($tags as $tag)
                    <tr>
                        <td>
                                {{ $tag->name }}
                        </td>
                        <td>
                            <a class="btn btn-primary btn-sm" href="{{ 'tags/' .$tag->id }}">
                            <i class="fa fa-pencil" aria-hidden="true"></i>
                            </a>
                        </td>
                        <td>
                            <form action="{{ url('tags/'.$tag->id) }}" method="post">
                                {{ csrf_field() }}
                                {{ method_field('DELETE') }}

                                <button type="submit" class="btn btn-danger btn-sm">
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