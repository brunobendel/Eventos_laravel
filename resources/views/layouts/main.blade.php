<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>@yield('title')</title>

  <!--Fonte do google -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto" rel="stylesheet">

  <!-- Bootstrap 5 -->
  <link href="{{ asset('css/bootstrap.min.css')}}" rel="stylesheet" crossorigin="anonymous">
  <!-- integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" -->
  <!-- CSS da aplicação -->
  <link rel="stylesheet" href="{{ asset('/css/styles.css')}}">

  <!-- JS da aplicação -->
  {{-- <script src="{{ $jsFilePath }}"></script> --}}



</head>

<body>
  <header>
    <nav class="navbar navbar-expand-lg navbar-light">
      <div class="collapse navbar-collapse" id="navbar">
        <a href="{{ asset('/')}}" class="navbar-brand">
          <img src="{{ asset('/img/logotipo.png')}}" alt="HDC Events">
        </a>
        <ul class="navbar-nav">
          <li class="nav-item">
            <a href="{{ asset('/')}}" class="nav-link">Eventos</a>
          </li>
          <li class="nav-item">
            <a href="{{ asset('/events/create')}}" class="nav-link">Criar Eventos</a>
          </li>
          @auth
          <li class="nav-item">
            <a href="{{ asset('/dashboard')}}" class="nav-link">Meus eventos</a>
          </li>
          <li class="nav-item">
            <form action="{{ asset('/logout')}}" method="POST">
              @csrf
              <a href="/logout" class="nav-link" onclick="event.preventDefault();
                    this.closest('form').submit();">
                Sair
              </a>
            </form>
          </li>
          @endauth
          @guest
          <li class="nav-item">
            <a href="{{ asset('/login')}}" class="nav-link">Entrar</a>
          </li>
          <li class="nav-item">
            <a href="{{ asset('/register')}}" class="nav-link">Cadastrar</a>
          </li>
          @endguest
        </ul>
      </div>
    </nav>
  </header>
  <main>
    <div class="container-fluid">
      <div class="row">
        @if (session('msg'))
        <p class="msg">{{ session('msg') }}
        </p>
        @endif
        @yield('content')
      </div>
    </div>
  </main>



  <footer>
    <p>© 2023 Goodyear do Brasil - Informação confidencial e/ou privilegiada. Este conteúdo não pode ser reproduzido ou compartilhado</p>
  </footer>

  <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>

</body>

</html>