    <!-- Sidebar -->
    <div id="sidebar-wrapper">
        <ul class="sidebar-nav">
            <li class="sidebar-brand">
                <a href="/posts">
                    PEIDE
                </a>
            </li>

            <li role="presentation" class="{{ $controller == 'TagController' ? 'active' : 'no-active' }}">
                <a href="{{ url('/posts') }}"><i class="fa fa-pencil-square-o fa-lg" aria-hidden="true"></i> Posts</a>
            </li>
            <li role="presentation" class="{{ $controller == 'TagController' ? 'active' : 'no-active' }}">
                <a href="{{ url('/tags') }}"><i class="fa fa-tags fa-lg" aria-hidden="true"></i> Categorias</a>
            </li>
            <hr>

            @if (Auth::guest())
                <li><a href="{{ url('/login') }}">Login</a></li>
            @else
            <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                    {{ Auth::user()->name }} <span class="caret"></span>
                </a>

                    <li>
                        <a href="{{ url('/user/profile') }}">
                            <i class="fa fa-btn fa-user"></i> Profile
                        </a>
                    </li>
                    <li class="divider"></li>
                    <li>
                        <a href="{{ url('/logout') }}">
                            <i class="fa fa-btn fa-sign-out"></i> Logout
                        </a>
                    </li>
            </li>
            @endif
        </ul>
    </div>
    <!-- /#sidebar-wrapper -->