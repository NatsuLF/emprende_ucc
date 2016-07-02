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

                                <button type="submit" class="btn btn-danger btn-xs" {{-- data-toggle="modal" href='#modal-id --}}'>
                                    <i class="fa fa-trash"></i>
                                </button>
{{--                                 <div class="modal fade" id="modal-id">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                                <h4 class="modal-title">Modal title</h4>
                                            </div>
                                            <div class="modal-body">

                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                                <button type="button" class="btn btn-primary">Save changes</button>
                                            </div>
                                        </div>
                                    </div>
                                </div> --}}
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