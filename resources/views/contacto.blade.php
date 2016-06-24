@extends('layouts.master')

@section('title', 'Contactanos')

@section('content')
@include('shared.form-contact')
    <div class="col-md-4">
        <iframe
            src="https://www.google.com/maps/embed?pb=!1m10!1m8!1m3!1d15585.884755864723!2d-86.87688622724608!3d12.418294516548364!3m2!1i1024!2i768!4f13.1!5e0!3m2!1ses!2ses!4v1465810316033"
            width="600"
            height="450"
            frameborder="0"
            style="border: 0"
            allowfullscreen>
        </iframe>
    </div>
@endsection
