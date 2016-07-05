<h3>
    <span class="label label-primary">
        <i class="fa fa-tags fa-fw" aria-hidden="true"></i>&nbsp; Categorias
    </span>
</h3>

@foreach ($tags as $tag)
    <div class="checkbox">
        <label>
            <input
                type="checkbox"
                name="tags[]"
                form="form"
                value="{{ $tag->id }}"
                @if (isset($tags_id))
                    @foreach ($tags_id as $id)
                        @if ($id == $tag->id)
                            checked="true"
                        @endif
                    @endforeach
                @endif
                >
            {{ $tag->name }}
        </label>
    </div>
@endforeach

<h3>
    <span class="label label-primary">
        <i class="fa fa-tags fa-fw" aria-hidden="true"></i>&nbsp; Estado
    </span>
</h3>

<div class="checkbox">
    <label id="text">
        <input
            type="checkbox"
            id="estado"
            name="published"
            @if (isset($post->published) && $post->published == TRUE)
                checked="true"
            @endif
            form="form">
        Publicar
    </label>
</div>
