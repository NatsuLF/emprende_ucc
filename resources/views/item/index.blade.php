@extends('layouts.app_backend')

@section('title', 'Productos')

@section('content')
    @if (count($items) > 0)
        <table class="table table-striped table-hover table-bordered">
            <colgroup>
                <col span="1" style="width: 90%;">
                <col span="1" style="width: 5%;">
                <col span="1" style="width: 5%;">
            </colgroup>
            <thead>
                <th>Productos</th>
                <th></th>
                <th></th>
            </thead>
            <tbody>
                @foreach ($items as $item)
                    <tr>
                        <td>
                                {{ $item->name }}
                        </td>
                        <td>
                            <a class="btn btn-primary btn-xs" href="{{ url('items/' . $item->id) }}">
                            <i class="fa fa-pencil fa-lg" aria-hidden="true"></i>
                            </a>
                        </td>
                        <td>
                            <form action="{{ url('items/'.$item->id) }}" method="post">
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