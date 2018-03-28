<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
  <a class="navbar-brand animated lightSpeedIn" href="{{ route('home') }}">Euclidiana</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarText">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item">
        <a class="nav-link" href="{{ route('home') }}">@lang('app.home.title')</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{ route('styles') }}">@lang('app.styles')</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{ route('campus') }}">@lang('app.campus')</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{ route('gender') }}">@lang('app.gender')</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{ route('style') }}">@lang('app.learningStyle')</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{ route('professor') }}">@lang('app.professorType')</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{ route('network') }}">@lang('app.networkClass')</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          @if (Session::get('lang') == "en")
            English
          @else
            Español
          @endif
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item" href="{{ url('lang', ['en']) }}">@lang('app.en')</a>
          <a class="dropdown-item" href="{{ url('lang', ['es']) }}">@lang('app.es')</a>
        </div>
      </li>
    </ul>
  </div>
</nav>