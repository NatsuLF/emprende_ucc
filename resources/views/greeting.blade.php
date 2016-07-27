@extends('layouts.distractionfree')

@section('title', 'Gracias por escribir')

@section('content')
        <div class="col-md-6 col-md-offset-3">
            <h1>{{ trans('messages.grats') }}</h1>
            <p>
                <a href="contacto" class="btn btn-primary" title="">{{ trans('messages.btn_continue_mail') }}</a>
            </p>
        </div>
@endsection
