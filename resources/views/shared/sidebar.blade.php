<ul class="nav nav-pills nav-stacked">
    <li role="presentation" class="{{ $controller == 'PostController' ? 'active' : 'no-active' }}">
        <a href="{{ url('/posts') }}">Posts</a>
    </li>
    <li role="presentation" class="{{ $controller == 'TagController' ? 'active' : 'no-active' }}">
        <a href="{{ url('/tags') }}">Categorias</a>
    </li>
    <li role="presentation" class="{{ $controller == 'ItemController' ? 'active' : 'no-active' }}">
        <a href="#">Productos</a>
    </li>
</ul>