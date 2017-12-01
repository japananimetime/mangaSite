<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    <link href="https://pingendo.com/assets/bootstrap/bootstrap-4.0.0-beta.1.css" rel="stylesheet">
</head>
<body>
    <div id="app">
    <nav class="navbar navbar-expand-md bg-primary navbar-dark sticky-top">
    <div class="container">
      <a class="navbar-brand" href="http://japananimetime.ddns.net"><i class="fa d-inline fa-lg fa-cloud"></i><b>manga.kz</b></a>
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbar2SupportedContent" aria-controls="navbar2SupportedContent" aria-expanded="false"
        aria-label="Toggle navigation"> <span class="navbar-toggler-icon"></span> </button>
      <div class="collapse navbar-collapse text-center justify-content-end" id="navbar2SupportedContent">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link" href="http://japananimetime.ddns.net/upload"><i class="fa d-inline fa-lg fa-bookmark-o"></i> Upload</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#"><i class="fa d-inline fa-lg fa-envelope-o"></i> Contacts</a>
          </li>
        </ul>
        @guest
        <a class="btn navbar-btn ml-2 text-white btn-secondary" href="/register"><i class="fa d-inline fa-lg fa-user-circle-o"></i> Sign in</a>
        @else
        <li class="dropdown">
            <a href="#" class="btn navbar-btn ml-2 text-white btn-secondary" data-toggle="dropdown" role="button" aria-expanded="false" aria-haspopup="true">
               <i class="fa d-inline fa-lg fa-user-circle-o"> </i>{{ Auth::user()->name }}<span class="caret"></span>
            </a>

            <ul class="dropdown-menu">
                <li>
                    <a href="{{ route('logout') }}"
                        onclick="event.preventDefault();
                                 document.getElementById('logout-form').submit();">
                        Logout
                    </a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        {{ csrf_field() }}
                    </form>
                </li>
            </ul>
        </li>
    @endguest
      </div>
    </div>
  </nav>
  <div class="py-5 gradient-overlay" style="background-image: url(&quot;https://pingendo.github.io/templates/sections/assets/cover_event.jpg&quot;);">
    <div class="p-5 container-fluid">
      <div class="row">
        <div class="col-md-3 text-white">
          <img class="img-fluid d-block mx-auto mb-5" src="https://pingendo.github.io/templates/sections/assets/footer_logo2.png"> </div>
        <div class="col-md-9 text-white align-self-center">
          <h1 class="display-3 mb-4">Manga.kz
            <br> </h1>
          <p class="lead mb-5">Make KazNet great again! &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
            <br> </p>
        </div>
      </div>
    </div>
  </div>       

        @yield('content')
    </div>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
