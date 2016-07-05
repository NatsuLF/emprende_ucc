<div class="form-group">
    <label for="name">Nombre de la etiqueta</label>
    <input
        type="text"
        name="name"
        @if (isset($tag))
            value="{{ $tag->name }}"
        @endif
        class="form-control"
        autofocus="true"
        required>
</div>