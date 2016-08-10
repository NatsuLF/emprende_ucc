<div class="header clearfix">
  <nav>
    <ul class="nav nav-pills pull-right">
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
        <h3 class="text-muted">PEIDE</h3>
        <small>Programa de Emprendedurismo, Innovación y Desarrollo Empresarial</small>
</div>