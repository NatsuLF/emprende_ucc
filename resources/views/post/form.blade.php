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
    <textarea id="textarea" name="body" class="textarea form-control" required>
        @if (isset($post->body))
            {{ $post->body }}
        @endif
     </textarea>
       <script type="text/javascript">
            $('textarea').wysihtml5();
       </script>
</div>
