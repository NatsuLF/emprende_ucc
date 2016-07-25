<nav class="navbar navbar-default navbar-fixed-top" role="navigation">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
          <a class="navbar-brand" href="{{ url('/') }}">
            <img src="http://lacolmenaonline.com/wp-content/uploads/2016/04/La_colmena_logo-2.png">
          </a>
        </div>
        <div class="collapse navbar-collapse">
            <ul class="nav navbar-nav navbar-right">
                <li class="{{ $controller == 'PostController' ? 'active' : 'no-active' }}">
                    <a href="{{ url('/') }}">
                        <i class="fa fa-newspaper-o fa-lg" aria-hidden="true"></i> Blog
                    </a>
                </li>
                <li class="{{ $controller == 'StaticController' && $action == 'about' ? 'active' : '' }}">
                    <a href="{{ url('about') }}">
                        <i class="fa fa-home fa-lg" aria-hidden="true"></i> Nosotros
                    </a>
                </li>
                <li class="{{ $controller == 'ItemController' ? 'active' : 'no-active' }}">
                    <a href="/catalogo">
                        <i class="fa fa-book fa-lg" aria-hidden="true"></i> Catalogo
                    </a>
                </li>
                <li class="{{ $controller == 'StaticController' && $action == 'services' ? 'active' : '' }}">
                    <a href="{{ url('services') }}">
                        <i class="fa fa-suitcase fa-lg" aria-hidden="true"></i> Servicios
                    </a>
                </li>
                <li class="{{ $controller == 'ContactController' ? 'active' : 'no-active' }}">
                    <a href="/contacto">
                        <i class="fa fa-envelope fa-lg" aria-hidden="true"></i> Contactanos
                    </a>
                </li>
            </ul>
        </div>
    </div>
</nav>