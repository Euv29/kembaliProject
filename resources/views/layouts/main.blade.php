<!DOCTYPE html>
<html lang="pt-PT">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>@yield('title')</title>

    <link rel="stylesheet" href="/css/styles.css">
    <link rel="stylesheet" href="/css/general.css">
</head>

<body>
    <header class="header-container">
        <nav class="header-nav">
            <ul class="header-list flex space-evenly align-center">
                @auth
                    <li class="profile-pic-area">
                        <a class="header-link" href="{{ route('dashboard') }}">
                            <img src="/img/profile.jpg" alt="Foto de perfil" id="profile-pic" width="" height="">
                        </a>
                    </li>
                @endauth

                @guest
                    <a href="/login" class="header-text">Entrar</a>
                @endguest

                <li>
                    <a class="header-link logo" href="{{ route('index.pergunta') }}">kembali</a>
                </li>

                @auth
                    <li>
                        <a class="header-link" href="#">
                            <ion-icon name="notifications" id="notification-icon"></ion-icon>
                        </a>
                    </li>
                @endauth

                @guest
                    <a href="/register" class="header-text">Registar</a>
                @endguest

            </ul>
        </nav>
    </header>

    <main class="main-container flex align-center col">

        @if (session('msg'))
            <section class="msg-container">
                <ion-icon name="checkmark-circle" id="alert-icon"></ion-icon>
                <p class="mensagem">{{ session('msg') }}</p>
            </section>
        @endif

        <section class="create-post-conteiner flex justify-center align-center">
            <section class="create-post flex align-center space-between">
                <a href="{{ route('create.pergunta') }}" id="ask">Clique para Escrever a Sua Dúvida</a>
                <p href="#" class="btn-submit flex align-center">
                    <ion-icon name="add-circle-outline" id="post-icon"></ion-icon>
                </p>
            </section>
        </section>

        <section class="posts-area flex col align-center">
            @yield('content')
        </section>
    </main>

    <footer class="footer-container">
        <nav class="footer-nav">
            <ul class="footer-list flex space-evenly align-center">
                <li><a class="footer-link" href="{{ route('index.pergunta') }}">
                        <ion-icon name="home-outline" class="footer-icons"></ion-icon>
                    </a>
                </li>
                <li><a class="footer-link footer-icons" href="{{ route('create.pergunta') }}">
                        <ion-icon name="add-circle-sharp" id="create"></ion-icon>
                    </a></li>
                <li><a class="footer-link" href="#">
                        <ion-icon name="search-outline" class="footer-icons"></ion-icon>
                    </a>
                </li>
            </ul>
        </nav>
    </footer>

    <script src="/js/index.js"></script>
    {{-- Icons --}}
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>

</html>
