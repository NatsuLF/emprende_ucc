@extends('layouts.dfmf')

@section('content')
    <form action="{{ '/posts' }}" name="form" method="post" autocomplete="off">
        {{ csrf_field() }}
        @include('post.form')

        <button type="submit" class="btn btn-primary">Publicar</button>
        <button type="submit" class="btn btn-primary">Borrador</button>
    </form>

    @include('shared.message')

    @include('common.errors')
@endsection

@section('tags')
    <h3><span class="label label-primary"><i class="fa fa-tags fa-fw" aria-hidden="true"></i>&nbsp; Categorias</span></h3>
    @foreach ($tags as $tag)
        <div class="checkbox">
            <label>
                <input type="checkbox" name="tags" form="form" value="{{ $tag->id }}">
                {{ $tag->name }}
            </label>
        </div>
    @endforeach
@endsection