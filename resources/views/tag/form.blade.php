<div class="form-group">
    <label for="name">Nombre de la etqiueta</label>
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