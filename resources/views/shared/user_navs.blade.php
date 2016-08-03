<ul class="nav nav-tabs tabs">
    <li role="presentation" class="{{ $action == 'profile' ? 'active' : '' }}">
        <a href="{{ url('user/profile') }}" role="tab">Perfil</a>
    </li>
    <li role="presentation" class="{{ $action == 'password' ? 'active' : '' }}">
        <a href="{{ url('user/password') }}" role="tab">Cambiar contraseña</a>
    </li>
</ul>
