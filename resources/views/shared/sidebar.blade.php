<div id="sidebar-wrapper">
    <ul class="sidebar-nav">
        <li class="sidebar-brand">
            <a href="/posts">
                Panel de Administración
            </a>
        </li>
        <li role="presentation" class="{{ $controller == 'PostController' ? 'active' : 'no-active' }}">
            <a href="{{ url('/posts') }}">
                <i class="fa fa-pencil-square-o fa-lg" aria-hidden="true"></i>
                    Posts
            </a>
        </li>
        <li role="presentation" class="{{ $controller == 'TagController' ? 'active' : 'no-active' }}">
            <a href="{{ url('/tags') }}">
                <i class="fa fa-tags fa-lg" aria-hidden="true"></i>
                    Categorias
            </a>
        </li>
        <li role="presentation" class="{{ $controller == 'ActivityController' ? 'active' : 'no-active' }}">
            <a href="{{ url('activities') }}">
              <i class="fa fa-bell-o fa-lg" aria-hidden="true"></i> Actividades
            </a>
        </li>
        <hr>

        @if (Auth::guest())
            <li>
                <a href="{{ url('/login') }}">
                    Login
                </a>
            </li>
        @else
        <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                {{ Auth::user()->name }} <span class="caret"></span>
            </a>
            <ul class="nav dropdown-menu">
                <li>
                    <a href="{{ url('/user/profile') }}">
                        <i class="fa fa-user fa-lg"></i> Profile
                    </a>
                </li>
                <li>
                    <a href="{{ url('/logout') }}">
                        <i class="fa fa-sign-out fa-lg"></i>Logout
                    </a>
                </li>
            </ul>
        </li>
        @endif
    </ul>
</div>