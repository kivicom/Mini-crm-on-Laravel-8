<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">

    <link href="//cdn.datatables.net/1.10.24/css/jquery.dataTables.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('assets/frontend/css/frontend.css') }}">
    <title></title>
</head>
<body>
<div id="app">
    <header class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-3 bg-body border-bottom shadow-sm">
        <p class="h5 my-0 me-md-auto fw-normal"><a href="{{ route('home') }}">Chao Cacao</a></p>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container-fluid">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                        data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        @auth()
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                               data-bs-toggle="dropdown" aria-expanded="false">
                                Промокоды
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="#">Одноразовые</a></li>
                                <li><a class="dropdown-item" href="#">Многоразовые</a></li>
                            </ul>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="/calls">Список вызовов и обращений</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="http://chaocacaokrd.ru/manager/">Список ТА</a>
                        </li>
                        @endauth

                        @role('Администратор')
                            <li class="nav-item">
                                <a class="nav-link" href="../admin">Админ панель</a>
                            </li>
                        @endrole

                        @auth()
                            <li class="nav-item"><a class="nav-link" href="{{ route('logout') }}">Выход</a></li>
                        @endauth
                        {{-- <li class="nav-item dropdown">
                             <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                 Dropdown
                             </a>
                             <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                 <li><a class="dropdown-item" href="#">Action</a></li>
                                 <li><a class="dropdown-item" href="#">Another action</a></li>
                                 <li>
                                     <hr class="dropdown-divider">
                                 </li>
                                 <li><a class="dropdown-item" href="#">Something else here</a></li>
                             </ul>
                         </li>--}}
                        {{--<li class="nav-item">
                            <a class="nav-link" href="{{ route('login.create') }}">Авторизация</a>
                        </li>--}}
                    </ul>
                </div>
            </div>
        </nav>
    </header>
    <div class="container">
        <div class="container pt-2">
            <div class="row">
                <div class="col-12">
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul class="list-unstyled">
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    @if (session()->has('error'))
                        <div class="alert alert-danger">
                            {{ session('error') }}
                        </div>
                    @endif

                    @if (session()->has('success'))
                        <div class="alert alert-success">
                            {{ session('success') }}
                        </div>
                    @endif
                </div>
            </div>
        </div>

        @yield('content')

    </div>

    <script src = "http://code.jquery.com/jquery-latest.js"></script>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0"
            crossorigin="anonymous"></script>

    <script src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script>

    @yield('js')

</div>
</body>
</html>
