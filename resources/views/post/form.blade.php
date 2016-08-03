<div class="form-group">
    <label for="title">Titulo</label>
    <input id="title" name="title" value="{{ isset($post->title) ? $post->title : '' }}" class="form-control" autofocus="true" required>
</div>

<div class="form-group">
    <label for="summary">Sumario</label>
    <textarea id="summary" name="summary" class="form-control" required>
        {{ isset($post->summary) ? $post->summary : '' }}
    </textarea>
</div>

<div class="form-group">
    <label for="body">Contenido del Post</label>
    <textarea id="summernote" name="body">
        {{ isset($post->body) ? $post->body : '' }}
    </textarea>
</div>

