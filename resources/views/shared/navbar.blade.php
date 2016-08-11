<div class="header clearfix">
  <nav class="navbar navbar-default" role="navigation">

      <h3 class="text-muted">PEIDE</h3>
      <small>Programa de Emprendedurismo, Innovación y Desarrollo Empresarial</small>
      <div class="navbar-header clearfix">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
      </div>

    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
    <ul class="nav nav-pills head-menu pull-right">
      <li role="presentation" class="{{ $controller == 'StaticController' && $action == 'about' ? 'active' : '' }}">
        <a href="{{ url('/') }}">Quienes somos</a>
      </li>
      <li role="presentation" class="{{ $controller == 'StaticController' && $action == 'services' ? 'active' : '' }}">
        <a href="{{ url('services') }}">Proyectos</a>
      </li>
      <li role="presentation" class="{{ $controller == 'ContactController' ? 'active' : 'no-active' }}">
        <a href="{{ url('contacto') }}">Contactanos</a>
      </li>
      <li role="presentation" class="{{ $controller == 'PostController' ? 'active' : 'no-active' }}">
        <a href="{{ url('blog') }}">Noticias</a>
      </li>
    </ul>
  </nav>
</div>
