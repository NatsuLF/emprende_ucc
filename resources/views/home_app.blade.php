@extends('layouts.master')

@section('title', 'Home')

@section('content')
    @include('shared.slide')
    @include('shared.objetives')
    @include('shared.friends_pages')
@endsection

@section('footer')
    @include('shared.footer')
@endsection