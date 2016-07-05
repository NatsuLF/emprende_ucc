<nav class="navbar navbar-default navbar-fixed-top" role="navigation">
    <div class="container">
        <div class="navbar-header">
        {{-- <a class="colmena navbar-brand" href="/">LA COLMENA</a> --}}
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
          <a class="navbar-brand" href="{{ url('/') }}">
            {{-- <img alt="Brand" src="https://dl.dropboxusercontent.com/s/zkqbixpz601xwx3/abeja.png?dl=0"> --}}
            <img src="http://lacolmenaonline.com/wp-content/uploads/2016/04/La_colmena_logo-2.png">
          </a>
        </div>
        <div class="collapse navbar-collapse navbar-ex1-collapse">
            <ul class="nav navbar-nav navbar-right">
                <li class="active"><a href="/"><i class="fa fa-home fa-lg" aria-hidden="true"></i> Nosotros</a></li>
                <li class=""><a href="/catalogo"><i class="fa fa-book fa-lg" aria-hidden="true"></i> Catalogo</a></li>
                <li class=""><a href="/servicios"><i class="fa fa-suitcase fa-lg" aria-hidden="true"></i> Servicios</a></li>
                <li class=""><a href="/contacto"><i class="fa fa-envelope fa-lg" aria-hidden="true"></i> Contactanos</a></li>
                <li class=""><a href="/login"><i class="fa fa-sign-in fa-lg" aria-hidden="true"></i> Login</a></li>
            </ul>
        </div>
    </div>
</nav>