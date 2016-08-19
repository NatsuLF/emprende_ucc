@extends('layouts.app_backend')

@section('title', 'Actividades')

@section('content')
    @if (count($activities) > 0)
        <table class="table table-striped table-hover table-bordered">
            <colgroup>
                <col span="1" style="width: 90%;">
                <col span="1" style="width: 5%;">
                <col span="1" style="width: 5%;">
            </colgroup>
            <thead>
                <th colspan="3">Actividades</th>
            </thead>
            <tbody>
                @foreach ($activities as $activity)
                    <tr>
                        <td>{{ $activity->name }}</td>
                        <td>
                            <a class="btn btn-primary btn-xs" href="{{ 'activities/edit/' .$activity->id }}">
                                <i class="fa fa-pencil fa-lg" aria-hidden="true"></i>
                            </a>
                        </td>
                        <td>
                            <form action="{{ url('activities/'. $activity->id) }}" method="post">
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
    @else
        <p>Nada que mostrar</p>
    @endif

    @if (session('status'))
        <div class="alert alert-success">
            {{ session('status') }}
        </div>
    @endif
@endsection