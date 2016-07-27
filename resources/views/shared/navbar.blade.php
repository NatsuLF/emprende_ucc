<nav class="navbar navbar-default navbar-fixed-top" role="navigation">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-ex1-collapse">
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
                <li class="{{ $controller == 'StaticController' && $action == 'about' ? 'active' : '' }}">
                    <a href="{{ url('/') }}">
                        <i class="fa fa-home fa-lg" aria-hidden="true"></i> {{ trans('messages.about') }}
                    </a>
                </li>
                <li class="{{ $controller == 'ItemController' ? 'active' : 'no-active' }}">
                    <a href="/catalogo">
                        <i class="fa fa-book fa-lg" aria-hidden="true"></i> {{ trans('messages.catalog') }}
                    </a>
                </li>
                <li class="{{ $controller == 'StaticController' && $action == 'services' ? 'active' : '' }}">
                    <a href="{{ url('services') }}">
                        <i class="fa fa-suitcase fa-lg" aria-hidden="true"></i> {{ trans('messages.services') }}
                    </a>
                </li>
                <li class="{{ $controller == 'ContactController' ? 'active' : 'no-active' }}">
                    <a href="/contacto">
                        <i class="fa fa-envelope fa-lg" aria-hidden="true"></i> {{ trans('messages.contact') }}
                    </a>
                </li>
                <li class="{{ $controller == 'PostController' ? 'active' : 'no-active' }}">
                    <a href="{{ url('blog') }}">
                        <i class="fa fa-newspaper-o fa-lg" aria-hidden="true"></i> Blog
                    </a>
                </li>
                <li class="dropdown language">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="true">
                  @if (Config::get('languages')[App::getLocale()] == 'English')
                      <img src="https://dl.dropboxusercontent.com/s/mwmlvrbsny65faw/united-states.gif?dl=0" alt="English">
                  @else
                      <img src="https://dl.dropboxusercontent.com/s/r0sjvws8y3lzk9u/spain.gif?dl=0" alt="Spanish">
                  @endif
                    <span class="caret"></span>
                  </a>
                      <ul class="dropdown-menu">
                        @foreach (Config::get('languages') as $lang => $language)
                            @if ($lang != App::getLocale())
                                <li>
                                    <a href="{{ route('lang.switch', $lang) }}">
                                         @if ($language == 'English')
                                             <img src="https://dl.dropboxusercontent.com/s/mwmlvrbsny65faw/united-states.gif?dl=0" alt="English">
                                         @else
                                             <img src="https://dl.dropboxusercontent.com/s/r0sjvws8y3lzk9u/spain.gif?dl=0" alt="Spanish">
                                         @endif
                                    </a>
                                </li>
                            @endif
                        @endforeach
                      </ul>
                </li>
            </ul>
        </div>
    </div>
</nav>