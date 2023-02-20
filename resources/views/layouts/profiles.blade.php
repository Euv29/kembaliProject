<!DOCTYPE html>
<html lang="pt-PT">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>@yield('title')</title>

    <link rel="stylesheet" href="/css/styles.css">
    <link rel="stylesheet" href="/css/general.css">
    <link rel="stylesheet" href="/css/profile.css">
</head>

<body>
    <header class="header-container">
        <nav class="header-nav">
            <ul class="header-list flex space-evenly align-center">
                
                <li class="">
                    <a class="header-link" href="/">
                        <ion-icon name="chevron-back-sharp" id="return-icon"></ion-icon>
                    </a>
                </li>

                <li>
                    <a class="header-link logo" href="#">kembali</a>
                </li>

                <li>
                    <a class="header-link" href="/notifications">
                        <ion-icon name="notifications" id="notification-icon"></ion-icon>
                    </a>
                </li>
            </ul>
        </nav>
    </header>

    <main class="main-container flex align-center col">
        <section class="posts-area flex col align-center">
            @yield('content')
        </section>
    </main>

    <footer class="footer-container">
        <nav class="footer-nav">
            <ul class="footer-list flex space-evenly align-center">
                <li><a class="footer-link" href="#">
                        <ion-icon name="home-outline" class="footer-icons"></ion-icon>
                    </a>
                </li>
                <li><a class="footer-link footer-icons" href="#">
                        <ion-icon name="add-circle-sharp" id="create"></ion-icon>
                    </a></li>
                <li><a class="footer-link" href="/search">
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
