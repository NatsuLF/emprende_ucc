<div id="wrapper">
    <!-- Sidebar -->
    <div id="sidebar-wrapper">
        <ul class="sidebar-nav">
            <li class="sidebar-brand">
                <a href="/posts">
                    Emprendedurismo
                </a>
            </li>
            <li role="presentation" class="{{ $controller == 'TagController' ? 'active' : 'no-active' }}">
                <a href="{{ url('/posts') }}"><i class="fa fa-pencil-square-o fa-lg" aria-hidden="true"></i>&nbsp; Posts</a>
            </li>
            <li role="presentation" class="{{ $controller == 'TagController' ? 'active' : 'no-active' }}">
                <a href="{{ url('/tags') }}"><i class="fa fa-tags fa-lg" aria-hidden="true"></i>&nbsp; Categorias</a>
            </li>
        </ul>
    </div>
    <!-- /#sidebar-wrapper -->
</div>