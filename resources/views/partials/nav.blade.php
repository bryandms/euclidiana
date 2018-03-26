<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
  <a class="navbar-brand animated lightSpeedIn" href="{{ route('home') }}">Euclidiana</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarText">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item">
        <a class="nav-link" href="{{ route('home') }}">Inicio</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{ route('styles') }}">Estilos</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{ route('campus') }}">Recinto</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{ route('gender') }}">Sexo</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{ route('style') }}">Estilo de aprendizaje</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{ route('professor') }}">Tipo de profesor</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{ route('network') }}">Clase de red</a>
      </li>
    </ul>
  </div>
</nav>