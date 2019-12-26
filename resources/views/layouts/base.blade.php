<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
    <link href="style.css" rel="stylesheet" type="text/css">

  <title>Briffingdor</title>

  <!-- Bootstrap core CSS -->
  <link href="{{asset('vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="{{asset('css/modern-business.css')}}" rel="stylesheet">

</head>

<body>
  <!-- Navigation -->
  <nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container">
      <a class="navbar-brand" href="/">BRIFFINGDOR.BY</a>
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
            @guest
            <li class="nav-item">
                <a class="nav-link" href="#1">Для кого?</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#2">Основные преимущества</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#3">Что получит клиент?</a>
            </li>
		<li class="nav-item">
            <a class="nav-link" href="/">Главная</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{asset('contact')}}">Контакты</a>
          </li>
            @endguest
		  @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Войти') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Регистрация') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Выйти') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                <li class="nav-item">
                    <a class="nav-link" href="/my_kviz">&#9993;</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{asset('kviz_create')}}">Cоздать квиз</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{asset('quiz/all')}}">Мои квизы</a>
                </li>
            @endguest
        </ul>
      </div>
    </div>
  </nav>
@yield('header')

  <!-- Page Content -->
  <div class="container">

    @yield('content')

  </div>
<div class="promejytoc">
    @yield('promejytoc')
</div>
  <!-- /.container -->

  <!-- Footer -->
  <footer class="py-5 bg-dark">
    <div class="container">
      <p class="m-0  text-white">&copy; BRIFFINGDOR 2019 Все права защищены</p>
    </div>
    <!-- /.container -->
  </footer>

  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="{{asset('js/main.js')}}"></script>
<script type="text/javascript">
    $(function(){
        $("a[href^='#']").click(function(){
            var _href = $(this).attr("href");
            $("html, body").animate({scrollTop: $(_href).offset().top-150});
            return false;
        });
    });
</script>

</body>

</html>
