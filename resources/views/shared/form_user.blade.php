<div class="form-group">
    <label for="name">Nombre</label>
    <input id="name" name="name" value="{{ $current_user->name }}" class="form-control" required>
</div>

<div class="form-group">
    <label for="email">Correo</label>
    <input type="email" id="email" class="form-control" name="email" value="{{ $current_user->email }}" required>
</div>
