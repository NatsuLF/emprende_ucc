@extends('layouts.dfm')

@section('title', 'Editar actividad')

@section('stylesheets')
    <link rel="stylesheet" href="{{ asset('components/eonasdan-bootstrap-datetimepicker/build/css/bootstrap-datetimepicker.min.css') }}">
@endsection

@section('javascripts')
    <script src="{{ asset('components/jquery/dist/jquery.min.js') }}"></script>
    <script src="{{ asset('components/moment/min/moment.min.js') }}"></script>
    <script src="{{ asset('components/bootstrap/dist/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('components/eonasdan-bootstrap-datetimepicker/build/js/bootstrap-datetimepicker.min.js') }}"></script>
    <script src="{{ asset('js/activity.js') }}"></script>
@endsection

@section('content')
    <form action="{{ url('activities/update/' .$activity->id) }}" method="post" autocomplete="off">
        {{ csrf_field() }}
        @include('activity.form')

        <button type="submit" class="btn btn-primary">Confirmar</button>
    </form>

    @if (session('status'))
        <div class="alert alert-success">
            {{ session('status') }}
        </div>
    @endif

    <p>
        @if (count($errors) > 0)
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        @endif
    </p>
@endsection