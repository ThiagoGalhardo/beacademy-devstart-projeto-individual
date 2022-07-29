<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- ========= GOOGLE FONTS ========= -->

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500&display=swap" rel="stylesheet">

    <!-- ========= BOOTSTRAP ========= -->

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.0/font/bootstrap-icons.css">

    <!-- ========= CSS ========= -->

    <link rel="stylesheet" type="text/css" href="{{ url('css/reset.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ url('css/style.css') }}">

    <!-- ========= API ========= -->

    <link href="https://unpkg.com/filepond@^4/dist/filepond.css" rel="stylesheet" />

    <title>@yield('title')</title>
</head>

<body>
    <header>
        <div class="container">
            <div class="logo">

                <a href="/">
                    <p>Larissa Garcia</p>
                </a>

            </div>
            <nav class="main-navigation">
                <ul class="menu">
                    <li class="menu-item"><a href="/">Início</a></li>
                    <li class="menu-item"><a href="/about">Sobre mim</a></li>
                    <li class="menu-item"><a href="/services">Serviços</a></li>
                    <li class="menu-item"><a href="/contact">Contato</a></li>
                    <!-- <li class="menu-item"><a href="/products" class="menu-item">Declaração de IR
                            @php
                            echo date('Y');
                            @endphp</a></li> -->



                    <li>
                        <div class="dropdown">
                            <button class="btn btn-secondary btn-sm dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                                DECLARAÇÃO DE IR
                                @php
                                echo date('Y');
                                @endphp
                            </button>
                            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                <li><a class="dropdown-item" href="/products">Fazer Declaração</a></li>
                                <li><a class="dropdown-item" href="/login">Acompanhar pedido</a></li>
                            </ul>
                            @if(Auth::user())
                    <li class="nav-item">
                        <a href="/account/{{ Auth::user()->id }}">{{ Auth::user()->name }}</a>
                    </li>


                    @if(Auth::user()->is_admin == 1)
                    <li class="nav-item">
                        <a class="nav-link text-dark" href="{{ route('page.index') }}">Dashboard</a>
                    </li>
                    @endif
                    <li class="nav-item">
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf

                            <a href="{{ route('logout') }}" onclick="event.preventDefault();
                                                                this.closest('form').submit();">
                                Sair
                            </a>

                        </form>
                    </li>
                    @else
                    <li class="nav-item">
                        <a href="{{ route('login') }}">Entrar</a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('register') }}">Registrar-se</a>
                    </li>
                    @endif
        </div>
        </li>
        </ul>
        </nav>
    </header>


    @yield('content')




    <footer>
        <div class="text-center p-4 footer">
            © @php
            echo date('Y');
            @endphp
            Copyright:
            <a class="text-reset fw-bold" href="https://galhardo.tech/">Feito com ♥ por Thiago Galhardo </a>
        </div>
    </footer>

    <script src="https://unpkg.com/filepond@^4/dist/filepond.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-kjU+l4N0Yf4ZOJErLsIcvOU2qSb74wXpOhqTvwVx3OElZRweTnQ6d31fXEoRD1Jy" crossorigin="anonymous"></script>
    @yield('scripts')
</body>

</html>
