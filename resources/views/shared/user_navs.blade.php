<ul class="nav nav-tabs">
    <li role="presentation" class="{{ $action == 'profile' ? 'active' : '' }}">
        <a href="{{ url('user/profile') }}" role="tab">Perfil</a>
    </li>
    <li role="presentation" class="{{ $action == 'update_password' ? 'active' : '' }}">
        <a href="{{ url('user/update_password') }}" role="tab">Cambiar contraseña</a>
    </li>
</ul>
