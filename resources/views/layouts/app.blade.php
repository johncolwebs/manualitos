<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  {{-- CSRF Token --}}
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <title>Manualitos Colombia</title>
  {{-- Styles --}}
  {{-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries --}}
  <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
  <link href="{{ mix('/css/app.css') }}" rel="stylesheet">
  {{-- Scripts --}}
  <script>
    window.Laravel = {!! json_encode([
      'csrfToken' => csrf_token(),
      ]) !!};
  </script>
</head>
<body>
  <div id="app">
    <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          {{-- Collapsed Hamburger --}}
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
            <span class="sr-only">Toggle Navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          {{-- Branding Image --}}
          <a class="navbar-brand" href="{{ url('/') }}">
            <img src="http://www.manualitos.com/public/img/logo.png" alt="Manualitos Colombia">
          </a>
        </div>
        <div class="collapse navbar-collapse" id="app-navbar-collapse">
          {{-- Left Side Of Navbar --}}
          <ul class="nav navbar-nav">
            <form class="navbar-form navbar-left">
              <div class="form-group">
                <input type="text" class="form-control col-md-8" placeholder="Buscar..." required="required">
              </div>
            </form>
            &nbsp;
          </ul>
          {{-- Right Side Of Navbar --}}
          <ul class="nav navbar-nav navbar-right">
            {{-- Carro de compras --}}
            <li>
              <a href="{{-- route('carrito') --}}">
                Mi Carrito
                <span class="label label-pill label-info products_count">0{{-- $productsCount --}}</span>
              </a>
            </li>
            {{-- Authentication Links --}}
            @if (Auth::guest())
              <li><a href="{{ route('login') }}">Ingresar</a></li>
              <li><a href="{{ route('register') }}">Registrarme</a></li>
            @else
              <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                  {{ Auth::user()->name }} <span class="caret"></span>
                </a>
                <ul class="dropdown-menu" role="menu">
                  <li>
                    <a href="{{ route('logout') }}"
                      onclick="event.preventDefault();
                      document.getElementById('logout-form').submit();">
                      Salir
                    </a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                      {{ csrf_field() }}
                    </form>
                  </li>
                </ul>
              </li>
            @endif
          </ul>
        </div>
      </div>
    </nav>

    @yield('content')
  </div>
  {{-- Footer --}}
  <div class="myf">
    <div class="bg-texture">
      <footer>
        <div class="container animatedParent">
          <div class="row animated fadeInDownShort go">
            <div class="col-md-4">
              {{-- COLUMN 1 --}}
              <h3 class="sr-only">Nosotros</h3>
              <i class="glyphicon glyphicon-fire" aria-hidden="true"></i> <span class="lead">ManualitosColombia</span><br><br>
              <address class="margin-bottom-30px">
                <ul class="list-unstyled">
                  <li><i class="material-icons">&#xE0C8;</i> Bogotá, Colombia</li>
                  <li><i class="material-icons">&#xE0CD;</i> (+57) 314 425 6004</li>
                  <li><i class="material-icons">&#xE0B7;</i> ventas@manualitos.com</li>
                </ul>
              </address>
              {{-- END COLUMN 1 --}}
            </div>
            <div class="col-md-4">
              {{-- COLUMN 2 --}}
              <h3 class="footer-heading">Información</h3>
              <div class="row margin-bottom-30px">
                <div class="col-xs-6">
                  <ul class="list-unstyled footer-nav">
                    <li><i class="glyphicon glyphicon-triangle-right" aria-hidden="true"></i> <a href="#">Mi Cuenta</a></li>
                    <li><i class="glyphicon glyphicon-triangle-right" aria-hidden="true"></i> <a href="#">FAQ</a></li>
                    <li><i class="glyphicon glyphicon-triangle-right" aria-hidden="true"></i> <a href="#">Términos y Condiciones</a></li>
                    <li><i class="glyphicon glyphicon-triangle-right" aria-hidden="true"></i> <a href="#">Políticas de Privacidad</a></li>
                  </ul>
                </div>
                <div class="col-xs-6">
                  <ul class="list-unstyled footer-nav">
                    <li><i class="glyphicon glyphicon-triangle-right" aria-hidden="true"></i> <a href="#">Blog</a></li>
                    <li><i class="glyphicon glyphicon-triangle-right" aria-hidden="true"></i> <a href="#">Envíos</a></li>
                    <li><i class="glyphicon glyphicon-triangle-right" aria-hidden="true"></i> <a href="#">Nosotros</a></li>
                    <li><i class="glyphicon glyphicon-triangle-right" aria-hidden="true"></i> <a href="#">Novedades</a></li>
                  </ul>
                </div>
              </div>
              {{-- END COLUMN 2 --}}
            </div>
            <div class="col-md-4">
              {{-- COLUMN 3 --}}
              {{-- <div class="newsletter"> <h3 class="footer-heading">NEWSLETTER</h3> <p>You can get latest update from us by subscribing to our newsletter.</p> <form class="newsletter-form" method="POST"> <div class="input-group input-group-lg"> <input class="form-control" name="email" placeholder="youremail@domain.com" type="email"> <span class="input-group-btn"> <button class="btn btn-info btn-raised" type="button"><i class="material-icons">&#xE068;</i><span>Suscribirse</span></button> </span> </div> </form> </div> --}}
              <div class="social-connect">
                <h3 class="footer-heading">Redes Sociales</h3>
                <ul class="list-inline social-icons">
                  <li><a href="#" class="facebook-bg"><img src="data:image/svg+xml;utf8;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iaXNvLTg4NTktMSI/Pgo8IS0tIEdlbmVyYXRvcjogQWRvYmUgSWxsdXN0cmF0b3IgMTYuMC4wLCBTVkcgRXhwb3J0IFBsdWctSW4gLiBTVkcgVmVyc2lvbjogNi4wMCBCdWlsZCAwKSAgLS0+CjwhRE9DVFlQRSBzdmcgUFVCTElDICItLy9XM0MvL0RURCBTVkcgMS4xLy9FTiIgImh0dHA6Ly93d3cudzMub3JnL0dyYXBoaWNzL1NWRy8xLjEvRFREL3N2ZzExLmR0ZCI+CjxzdmcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB4bWxuczp4bGluaz0iaHR0cDovL3d3dy53My5vcmcvMTk5OS94bGluayIgdmVyc2lvbj0iMS4xIiBpZD0iQ2FwYV8xIiB4PSIwcHgiIHk9IjBweCIgd2lkdGg9IjY0cHgiIGhlaWdodD0iNjRweCIgdmlld0JveD0iMCAwIDQzMC4xMTMgNDMwLjExNCIgc3R5bGU9ImVuYWJsZS1iYWNrZ3JvdW5kOm5ldyAwIDAgNDMwLjExMyA0MzAuMTE0OyIgeG1sOnNwYWNlPSJwcmVzZXJ2ZSI+CjxnPgoJPHBhdGggaWQ9IkZhY2Vib29rIiBkPSJNMTU4LjA4MSw4My4zYzAsMTAuODM5LDAsNTkuMjE4LDAsNTkuMjE4aC00My4zODV2NzIuNDEyaDQzLjM4NXYyMTUuMTgzaDg5LjEyMlYyMTQuOTM2aDU5LjgwNSAgIGMwLDAsNS42MDEtMzQuNzIxLDguMzE2LTcyLjY4NWMtNy43ODQsMC02Ny43ODQsMC02Ny43ODQsMHMwLTQyLjEyNywwLTQ5LjUxMWMwLTcuNCw5LjcxNy0xNy4zNTQsMTkuMzIxLTE3LjM1NCAgIGM5LjU4NiwwLDI5LjgxOCwwLDQ4LjU1NywwYzAtOS44NTksMC00My45MjQsMC03NS4zODVjLTI1LjAxNiwwLTUzLjQ3NiwwLTY2LjAyMSwwQzE1NS44NzgtMC4wMDQsMTU4LjA4MSw3Mi40OCwxNTguMDgxLDgzLjN6IiBmaWxsPSIjRkZGRkZGIi8+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPC9zdmc+Cg==" /></a></li>
                  <li><a href="#" class="twitter-bg"><img src="data:image/svg+xml;utf8;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iaXNvLTg4NTktMSI/Pgo8IS0tIEdlbmVyYXRvcjogQWRvYmUgSWxsdXN0cmF0b3IgMTYuMC4wLCBTVkcgRXhwb3J0IFBsdWctSW4gLiBTVkcgVmVyc2lvbjogNi4wMCBCdWlsZCAwKSAgLS0+CjwhRE9DVFlQRSBzdmcgUFVCTElDICItLy9XM0MvL0RURCBTVkcgMS4xLy9FTiIgImh0dHA6Ly93d3cudzMub3JnL0dyYXBoaWNzL1NWRy8xLjEvRFREL3N2ZzExLmR0ZCI+CjxzdmcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB4bWxuczp4bGluaz0iaHR0cDovL3d3dy53My5vcmcvMTk5OS94bGluayIgdmVyc2lvbj0iMS4xIiBpZD0iQ2FwYV8xIiB4PSIwcHgiIHk9IjBweCIgd2lkdGg9IjMycHgiIGhlaWdodD0iMzJweCIgdmlld0JveD0iMCAwIDQzMC4xMTcgNDMwLjExNyIgc3R5bGU9ImVuYWJsZS1iYWNrZ3JvdW5kOm5ldyAwIDAgNDMwLjExNyA0MzAuMTE3OyIgeG1sOnNwYWNlPSJwcmVzZXJ2ZSI+CjxnPgoJPHBhdGggaWQ9IlR3aXR0ZXJfX3gyOF9hbHRfeDI5XyIgZD0iTTM4MS4zODQsMTk4LjYzOWMyNC4xNTctMS45OTMsNDAuNTQzLTEyLjk3NSw0Ni44NDktMjcuODc2ICAgYy04LjcxNCw1LjM1My0zNS43NjQsMTEuMTg5LTUwLjcwMyw1LjYzMWMtMC43MzItMy41MS0xLjU1LTYuODQ0LTIuMzUzLTkuODU0Yy0xMS4zODMtNDEuNzk4LTUwLjM1Ny03NS40NzItOTEuMTk0LTcxLjQwNCAgIGMzLjMwNC0xLjMzNCw2LjY1NS0yLjU3Niw5Ljk5Ni0zLjY5MWM0LjQ5NS0xLjYxLDMwLjg2OC01LjkwMSwyNi43MTUtMTUuMjFjLTMuNS04LjE4OC0zNS43MjIsNi4xODgtNDEuNzg5LDguMDY3ICAgYzguMDA5LTMuMDEyLDIxLjI1NC04LjE5MywyMi42NzMtMTcuMzk2Yy0xMi4yNywxLjY4My0yNC4zMTUsNy40ODQtMzMuNjIyLDE1LjkxOWMzLjM2LTMuNjE3LDUuOTA5LTguMDI1LDYuNDUtMTIuNzY5ICAgQzI0MS42OCw5MC45NjMsMjIyLjU2MywxMzMuMTEzLDIwNy4wOTIsMTc0Yy0xMi4xNDgtMTEuNzczLTIyLjkxNS0yMS4wNDQtMzIuNTc0LTI2LjE5MiAgIGMtMjcuMDk3LTE0LjUzMS01OS40OTYtMjkuNjkyLTExMC4zNTUtNDguNTcyYy0xLjU2MSwxNi44MjcsOC4zMjIsMzkuMjAxLDM2LjgsNTQuMDhjLTYuMTctMC44MjYtMTcuNDUzLDEuMDE3LTI2LjQ3NywzLjE3OCAgIGMzLjY3NSwxOS4yNzcsMTUuNjc3LDM1LjE1OSw0OC4xNjksNDIuODM5Yy0xNC44NDksMC45OC0yMi41MjMsNC4zNTktMjkuNDc4LDExLjY0MmM2Ljc2MywxMy40MDcsMjMuMjY2LDI5LjE4Niw1Mi45NTMsMjUuOTQ3ICAgYy0zMy4wMDYsMTQuMjI2LTEzLjQ1OCw0MC41NzEsMTMuMzk5LDM2LjY0MkMxMTMuNzEzLDMyMC44ODcsNDEuNDc5LDMxNy40MDksMCwyNzcuODI4ICAgYzEwOC4yOTksMTQ3LjU3MiwzNDMuNzE2LDg3LjI3NCwzNzguNzk5LTU0Ljg2NmMyNi4yODUsMC4yMjQsNDEuNzM3LTkuMTA1LDUxLjMxOC0xOS4zOSAgIEM0MTQuOTczLDIwNi4xNDIsMzkzLjAyMywyMDMuNDg2LDM4MS4zODQsMTk4LjYzOXoiIGZpbGw9IiNGRkZGRkYiLz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8L3N2Zz4K" /></a></li>
                  <li><a href="#" class="googleplus-bg"><img src="data:image/svg+xml;utf8;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iaXNvLTg4NTktMSI/Pgo8IS0tIEdlbmVyYXRvcjogQWRvYmUgSWxsdXN0cmF0b3IgMTYuMC4wLCBTVkcgRXhwb3J0IFBsdWctSW4gLiBTVkcgVmVyc2lvbjogNi4wMCBCdWlsZCAwKSAgLS0+CjwhRE9DVFlQRSBzdmcgUFVCTElDICItLy9XM0MvL0RURCBTVkcgMS4xLy9FTiIgImh0dHA6Ly93d3cudzMub3JnL0dyYXBoaWNzL1NWRy8xLjEvRFREL3N2ZzExLmR0ZCI+CjxzdmcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB4bWxuczp4bGluaz0iaHR0cDovL3d3dy53My5vcmcvMTk5OS94bGluayIgdmVyc2lvbj0iMS4xIiBpZD0iQ2FwYV8xIiB4PSIwcHgiIHk9IjBweCIgd2lkdGg9IjMycHgiIGhlaWdodD0iMzJweCIgdmlld0JveD0iMCAwIDkwIDkwIiBzdHlsZT0iZW5hYmxlLWJhY2tncm91bmQ6bmV3IDAgMCA5MCA5MDsiIHhtbDpzcGFjZT0icHJlc2VydmUiPgo8Zz4KCTxwYXRoIGlkPSJHb29nbGUiIGQ9Ik03NC40OTksMEg1MC4xNDRjLTYuMzgyLDAtMTQuNDIxLDAuOTQyLTIxLjE1OCw2LjQ5Yy01LjA5LDQuMzc0LTcuNTY2LDEwLjM5Mi03LjU2NiwxNS44MjggICBjMCw5LjIxMSw3LjA5NCwxOC41NDYsMTkuNjI1LDE4LjU0NmMxLjE4MiwwLDIuNDc3LTAuMTIsMy43ODctMC4yMzVjLTAuNTkyLDEuNDEzLTEuMTg5LDIuNTk0LTEuMTg5LDQuNjA1ICAgYzAsMy42NjIsMS44OTMsNS45MDIsMy41NDcsOC4wMjljLTUuMzE0LDAuMzUzLTE1LjI0OSwwLjk0Mi0yMi41ODMsNS40MjhjLTYuOTc1LDQuMTQzLTkuMTA3LDEwLjE2LTkuMTA3LDE0LjQxNCAgIEMxNS40OTksODEuODQ2LDIzLjc3OCw5MCw0MC45MjMsOTBjMjAuMzM2LDAsMzEuMDk4LTExLjIyLDMxLjA5OC0yMi4zM2MwLTguMTQzLTQuNzI5LTEyLjE2NC05LjkzMi0xNi41MzRsLTQuMjU4LTMuMzA1ICAgYy0xLjI5NS0xLjA2NS0zLjA2OC0yLjQ3OS0zLjA2OC01LjA4YzAtMi41OTcsMS43NzMtNC4yNTQsMy4zMDctNS43ODljNC45NjQtMy44OTYsOS45MzMtOC4wMyw5LjkzMy0xNi43NyAgIGMwLTguOTc5LTUuNjgtMTMuNzA0LTguMzk2LTE1Ljk0N2g3LjMzNEw3NC40OTksMHogTTY0LjEwMyw3Mi4yNzljMCw3LjMyMi02LjAzMywxMi43NTMtMTcuMzg1LDEyLjc1MyAgIGMtMTIuNjQ4LDAtMjAuODA5LTYuMDI0LTIwLjgwOS0xNC40MDVjMC04LjM5Myw3LjU2OC0xMS4yMTgsMTAuMTY2LTEyLjE2NGM0Ljk2OS0xLjY1NiwxMS4zNTItMS44OTEsMTIuNDE0LTEuODkxICAgYzEuMTg0LDAsMS43NzUsMCwyLjcyNSwwLjExNUM2MC4yMDIsNjMuMDY0LDY0LjEwMyw2Ni4yNTcsNjQuMTAzLDcyLjI3OXogTTU0LjY0MiwzNC4yNDljLTEuODkzLDEuODg2LTUuMDg4LDMuMzA1LTguMDQ1LDMuMzA1ICAgYy0xMC4xNjQsMC0xNC43NzItMTMuMTEzLTE0Ljc3Mi0yMS4wMjNjMC0zLjA3MiwwLjU5Mi02LjI1OCwyLjU5OC04Ljc0YzEuODkzLTIuMzYyLDUuMjAxLTMuODk5LDguMjc3LTMuODk5ICAgYzkuODEyLDAsMTQuODk5LDEzLjIyOSwxNC44OTksMjEuNzNDNTcuNTk5LDI3Ljc1Miw1Ny4zNTgsMzEuNTI4LDU0LjY0MiwzNC4yNDl6IiBmaWxsPSIjRkZGRkZGIi8+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPC9zdmc+Cg==" /></a></li>
                  <li><a href="#" class="youtube-bg"><img src="data:image/svg+xml;utf8;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iaXNvLTg4NTktMSI/Pgo8IS0tIEdlbmVyYXRvcjogQWRvYmUgSWxsdXN0cmF0b3IgMTYuMC4wLCBTVkcgRXhwb3J0IFBsdWctSW4gLiBTVkcgVmVyc2lvbjogNi4wMCBCdWlsZCAwKSAgLS0+CjwhRE9DVFlQRSBzdmcgUFVCTElDICItLy9XM0MvL0RURCBTVkcgMS4xLy9FTiIgImh0dHA6Ly93d3cudzMub3JnL0dyYXBoaWNzL1NWRy8xLjEvRFREL3N2ZzExLmR0ZCI+CjxzdmcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB4bWxuczp4bGluaz0iaHR0cDovL3d3dy53My5vcmcvMTk5OS94bGluayIgdmVyc2lvbj0iMS4xIiBpZD0iQ2FwYV8xIiB4PSIwcHgiIHk9IjBweCIgd2lkdGg9IjUxMnB4IiBoZWlnaHQ9IjUxMnB4IiB2aWV3Qm94PSIwIDAgOTAgOTAiIHN0eWxlPSJlbmFibGUtYmFja2dyb3VuZDpuZXcgMCAwIDkwIDkwOyIgeG1sOnNwYWNlPSJwcmVzZXJ2ZSI+CjxnPgoJPHBhdGggaWQ9IllvdVR1YmUiIGQ9Ik03MC45MzksNjUuODMySDY2bDAuMDIzLTIuODY5YzAtMS4yNzUsMS4wNDctMi4zMTgsMi4zMjYtMi4zMThoMC4zMTVjMS4yODIsMCwyLjMzMiwxLjA0MywyLjMzMiwyLjMxOCAgIEw3MC45MzksNjUuODMyeiBNNTIuNDEzLDU5LjY4NGMtMS4yNTMsMC0yLjI3OCwwLjg0Mi0yLjI3OCwxLjg3M1Y3NS41MWMwLDEuMDI5LDEuMDI1LDEuODY5LDIuMjc4LDEuODY5ICAgYzEuMjU4LDAsMi4yODQtMC44NCwyLjI4NC0xLjg2OVY2MS41NTdDNTQuNjk3LDYwLjUyNSw1My42NzEsNTkuNjg0LDUyLjQxMyw1OS42ODR6IE04Mi41LDUxLjg3OXYyNi41NDQgICBDODIuNSw4NC43OSw3Ni45NzksOTAsNzAuMjMsOTBIMTkuNzcxQzEzLjAyLDkwLDcuNSw4NC43OSw3LjUsNzguNDIzVjUxLjg3OWMwLTYuMzY3LDUuNTItMTEuNTc4LDEyLjI3MS0xMS41NzhINzAuMjMgICBDNzYuOTc5LDQwLjMwMSw4Mi41LDQ1LjUxMiw4Mi41LDUxLjg3OXogTTIzLjEzNyw4MS4zMDVsLTAuMDA0LTI3Ljk2MWw2LjI1NSwwLjAwMnYtNC4xNDNsLTE2LjY3NC0wLjAyNXY0LjA3M2w1LjIwNSwwLjAxNXYyOC4wMzkgICBIMjMuMTM3eiBNNDEuODg3LDU3LjUwOWgtNS4yMTV2MTQuOTMxYzAsMi4xNiwwLjEzMSwzLjI0LTAuMDA4LDMuNjIxYy0wLjQyNCwxLjE1OC0yLjMzLDIuMzg4LTMuMDczLDAuMTI1ICAgYy0wLjEyNi0wLjM5Ni0wLjAxNS0xLjU5MS0wLjAxNy0zLjY0M2wtMC4wMjEtMTUuMDM0aC01LjE4NmwwLjAxNiwxNC43OThjMC4wMDQsMi4yNjgtMC4wNTEsMy45NTksMC4wMTgsNC43MjkgICBjMC4xMjcsMS4zNTcsMC4wODIsMi45MzksMS4zNDEsMy44NDNjMi4zNDYsMS42OSw2Ljg0My0wLjI1Miw3Ljk2OC0yLjY2OGwtMC4wMSwzLjA4M2w0LjE4OCwwLjAwNUw0MS44ODcsNTcuNTA5TDQxLjg4Nyw1Ny41MDl6ICAgIE01OC41Nyw3NC42MDdMNTguNTU5LDYyLjE4Yy0wLjAwNC00LjczNi0zLjU0Ny03LjU3Mi04LjM1Ni0zLjc0bDAuMDIxLTkuMjM5bC01LjIwOSwwLjAwOGwtMC4wMjUsMzEuODlsNC4yODQtMC4wNjJsMC4zOS0xLjk4NiAgIEM1NS4xMzcsODQuMDcyLDU4LjU3OCw4MC42MzEsNTguNTcsNzQuNjA3eiBNNzQuODkxLDcyLjk2bC0zLjkxLDAuMDIxYy0wLjAwMiwwLjE1NS0wLjAwOCwwLjMzNC0wLjAxLDAuNTI5djIuMTgyICAgYzAsMS4xNjgtMC45NjUsMi4xMTktMi4xMzcsMi4xMTloLTAuNzY2Yy0xLjE3NCwwLTIuMTM5LTAuOTUxLTIuMTM5LTIuMTE5Vjc1LjQ1di0yLjR2LTMuMDk3aDguOTU0di0zLjM3ICAgYzAtMi40NjMtMC4wNjMtNC45MjUtMC4yNjctNi4zMzNjLTAuNjQxLTQuNDU0LTYuODkzLTUuMTYxLTEwLjA1MS0yLjg4MWMtMC45OTEsMC43MTItMS43NDgsMS42NjUtMi4xODgsMi45NDUgICBjLTAuNDQ0LDEuMjgxLTAuNjY1LDMuMDMxLTAuNjY1LDUuMjU0djcuNDFDNjEuNzE0LDg1LjI5Niw3Ni42NzYsODMuNTU1LDc0Ljg5MSw3Mi45NnogTTU0LjgzMywzMi43MzIgICBjMC4yNjksMC42NTQsMC42ODcsMS4xODQsMS4yNTQsMS41ODRjMC41NiwwLjM5NCwxLjI3NiwwLjU5MiwyLjEzNCwwLjU5MmMwLjc1MiwwLDEuNDE4LTAuMjAzLDEuOTk4LTAuNjIyICAgYzAuNTc4LTAuNDE3LDEuMDY1LTEuMDQsMS40NjMtMS44NzFsLTAuMDk5LDIuMDQ2aDUuODEzVjkuNzRINjIuODJ2MTkuMjRjMCwxLjA0Mi0wLjg1OCwxLjg5NS0xLjkwNywxLjg5NSAgIGMtMS4wNDMsMC0xLjkwNC0wLjg1My0xLjkwNC0xLjg5NVY5Ljc0aC00Ljc3NnYxNi42NzRjMCwyLjEyNCwwLjAzOSwzLjU0LDAuMTAyLDQuMjU4QzU0LjQsMzEuMzg1LDU0LjU2NCwzMi4wNjksNTQuODMzLDMyLjczMnogICAgTTM3LjIxNywxOC43N2MwLTIuMzczLDAuMTk4LTQuMjI2LDAuNTkxLTUuNTYyYzAuMzk2LTEuMzMxLDEuMTA3LTIuNDAxLDIuMTM3LTMuMjA4YzEuMDI3LTAuODExLDIuMzQyLTEuMjE3LDMuOTQxLTEuMjE3ICAgYzEuMzQ1LDAsMi40OTcsMC4yNjQsMy40NTksMC43ODFjMC45NjcsMC41MiwxLjcxMywxLjE5NSwyLjIzLDIuMDI4YzAuNTI3LDAuODM2LDAuODg1LDEuNjk1LDEuMDc2LDIuNTc0ICAgYzAuMTk1LDAuODkxLDAuMjkxLDIuMjM1LDAuMjkxLDQuMDQ4djYuMjUyYzAsMi4yOTMtMC4wOTIsMy45OC0wLjI3MSw1LjA1MWMtMC4xNzcsMS4wNzQtMC41NTcsMi4wNy0xLjE0NiwzLjAwNCAgIGMtMC41OCwwLjkyNC0xLjMyOSwxLjYxNS0yLjIzNywyLjA1NmMtMC45MTgsMC40NDUtMS45NjgsMC42NjMtMy4xNTQsMC42NjNjLTEuMzI1LDAtMi40NDEtMC4xODMtMy4zNjEtMC41NjUgICBjLTAuOTIzLTAuMzgtMS42MzYtMC45NTMtMi4xNDQtMS43MTRjLTAuNTEzLTAuNzYyLTAuODc0LTEuNjktMS4wOTItMi43NzJjLTAuMjE5LTEuMDgxLTAuMzIzLTIuNzA3LTAuMzIzLTQuODc0TDM3LjIxNywxOC43NyAgIEwzNy4yMTcsMTguNzd6IE00MS43NywyOC41OWMwLDEuNCwxLjA0MiwyLjU0MywyLjMxMSwyLjU0M2MxLjI3LDAsMi4zMDgtMS4xNDMsMi4zMDgtMi41NDNWMTUuNDNjMC0xLjM5OC0xLjAzOC0yLjU0MS0yLjMwOC0yLjU0MSAgIGMtMS4yNjksMC0yLjMxMSwxLjE0My0yLjMxMSwyLjU0MVYyOC41OXogTTI1LjY4MiwzNS4yMzVoNS40ODRsMC4wMDYtMTguOTZsNi40OC0xNi4yNDJoLTUuOTk4bC0zLjQ0NSwxMi4wNjRMMjQuNzE1LDBoLTUuOTM2ICAgbDYuODk0LDE2LjI4NEwyNS42ODIsMzUuMjM1eiIgZmlsbD0iI0ZGRkZGRiIvPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+Cjwvc3ZnPgo=" /></a></li>
                  <li><a href="#" class="whatsapp-bg"><img src="data:image/svg+xml;utf8;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iaXNvLTg4NTktMSI/Pgo8IS0tIEdlbmVyYXRvcjogQWRvYmUgSWxsdXN0cmF0b3IgMTYuMC4wLCBTVkcgRXhwb3J0IFBsdWctSW4gLiBTVkcgVmVyc2lvbjogNi4wMCBCdWlsZCAwKSAgLS0+CjwhRE9DVFlQRSBzdmcgUFVCTElDICItLy9XM0MvL0RURCBTVkcgMS4xLy9FTiIgImh0dHA6Ly93d3cudzMub3JnL0dyYXBoaWNzL1NWRy8xLjEvRFREL3N2ZzExLmR0ZCI+CjxzdmcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB4bWxuczp4bGluaz0iaHR0cDovL3d3dy53My5vcmcvMTk5OS94bGluayIgdmVyc2lvbj0iMS4xIiBpZD0iQ2FwYV8xIiB4PSIwcHgiIHk9IjBweCIgd2lkdGg9IjMycHgiIGhlaWdodD0iMzJweCIgdmlld0JveD0iMCAwIDkwIDkwIiBzdHlsZT0iZW5hYmxlLWJhY2tncm91bmQ6bmV3IDAgMCA5MCA5MDsiIHhtbDpzcGFjZT0icHJlc2VydmUiPgo8Zz4KCTxwYXRoIGlkPSJXaGF0c0FwcCIgZD0iTTkwLDQzLjg0MWMwLDI0LjIxMy0xOS43NzksNDMuODQxLTQ0LjE4Miw0My44NDFjLTcuNzQ3LDAtMTUuMDI1LTEuOTgtMjEuMzU3LTUuNDU1TDAsOTBsNy45NzUtMjMuNTIyICAgYy00LjAyMy02LjYwNi02LjM0LTE0LjM1NC02LjM0LTIyLjYzN0MxLjYzNSwxOS42MjgsMjEuNDE2LDAsNDUuODE4LDBDNzAuMjIzLDAsOTAsMTkuNjI4LDkwLDQzLjg0MXogTTQ1LjgxOCw2Ljk4MiAgIGMtMjAuNDg0LDAtMzcuMTQ2LDE2LjUzNS0zNy4xNDYsMzYuODU5YzAsOC4wNjUsMi42MjksMTUuNTM0LDcuMDc2LDIxLjYxTDExLjEwNyw3OS4xNGwxNC4yNzUtNC41MzcgICBjNS44NjUsMy44NTEsMTIuODkxLDYuMDk3LDIwLjQzNyw2LjA5N2MyMC40ODEsMCwzNy4xNDYtMTYuNTMzLDM3LjE0Ni0zNi44NTdTNjYuMzAxLDYuOTgyLDQ1LjgxOCw2Ljk4MnogTTY4LjEyOSw1My45MzggICBjLTAuMjczLTAuNDQ3LTAuOTk0LTAuNzE3LTIuMDc2LTEuMjU0Yy0xLjA4NC0wLjUzNy02LjQxLTMuMTM4LTcuNC0zLjQ5NWMtMC45OTMtMC4zNTgtMS43MTctMC41MzgtMi40MzgsMC41MzcgICBjLTAuNzIxLDEuMDc2LTIuNzk3LDMuNDk1LTMuNDMsNC4yMTJjLTAuNjMyLDAuNzE5LTEuMjYzLDAuODA5LTIuMzQ3LDAuMjcxYy0xLjA4Mi0wLjUzNy00LjU3MS0xLjY3My04LjcwOC01LjMzMyAgIGMtMy4yMTktMi44NDgtNS4zOTMtNi4zNjQtNi4wMjUtNy40NDFjLTAuNjMxLTEuMDc1LTAuMDY2LTEuNjU2LDAuNDc1LTIuMTkxYzAuNDg4LTAuNDgyLDEuMDg0LTEuMjU1LDEuNjI1LTEuODgyICAgYzAuNTQzLTAuNjI4LDAuNzIzLTEuMDc1LDEuMDgyLTEuNzkzYzAuMzYzLTAuNzE3LDAuMTgyLTEuMzQ0LTAuMDktMS44ODNjLTAuMjctMC41MzctMi40MzgtNS44MjUtMy4zNC03Ljk3NyAgIGMtMC45MDItMi4xNS0xLjgwMy0xLjc5Mi0yLjQzNi0xLjc5MmMtMC42MzEsMC0xLjM1NC0wLjA5LTIuMDc2LTAuMDljLTAuNzIyLDAtMS44OTYsMC4yNjktMi44ODksMS4zNDQgICBjLTAuOTkyLDEuMDc2LTMuNzg5LDMuNjc2LTMuNzg5LDguOTYzYzAsNS4yODgsMy44NzksMTAuMzk3LDQuNDIyLDExLjExM2MwLjU0MSwwLjcxNiw3LjQ5LDExLjkyLDE4LjUsMTYuMjIzICAgQzU4LjIsNjUuNzcxLDU4LjIsNjQuMzM2LDYwLjE4Niw2NC4xNTZjMS45ODQtMC4xNzksNi40MDYtMi41OTksNy4zMTItNS4xMDdDNjguMzk4LDU2LjUzNyw2OC4zOTgsNTQuMzg2LDY4LjEyOSw1My45Mzh6IiBmaWxsPSIjRkZGRkZGIi8+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPC9zdmc+Cg==" /></a></li>
                </ul>
              </div>
              {{-- END COLUMN 3 --}}
            </div>
          </div>
        </div>

        {{-- COPYRIGHT --}}
        <div class="text-center copyright"> Copyright &copy; ManualitosColombia 2011-{{ date('Y') }} &reg;All Rights Reserverd &hearts; </div>
        {{-- END COPYRIGHT --}}
      </footer>
    </div>
  </div>
  {{-- Footer EOF --}}
  <script src="{{ mix('/js/app.js') }}"></script>
</body>
</html>
