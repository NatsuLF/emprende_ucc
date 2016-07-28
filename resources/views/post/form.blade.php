<div class="form-group">
    <label for="title">Titulo</label>
    <input id="title"
    name="title"
    @if (isset($post->title))
        value="{{ $post->title }}"
    @endif
    type="text"
    class="form-control"
    required autofocus="true">
</div>

<div class="form-group">
    <label for="body">Contenido del Post</label>
    <textarea id="summernote" name="body">
            @if (isset($post->body))
                {{ $post->body }}
            @endif
    </textarea>
</div>

