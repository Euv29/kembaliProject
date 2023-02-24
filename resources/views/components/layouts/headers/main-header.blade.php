<header class="header-container">
    <nav class="header-nav">
        <ul class="header-list flex space-evenly align-center">

            <li class="profile-pic-area">
                <a class="header-link" href="{{ route('dashboard') }}">
                    <img src="/img/profile.jpg" alt="Foto de perfil" id="profile-pic" width="" height="">
                </a>
            </li>

            <li>
                <a class="header-link logo" href="{{ route('index.pergunta') }}">kembali</a>
            </li>

            <li>
                <a class="header-link" href="#">
                    <ion-icon name="notifications" id="notification-icon"></ion-icon>
                </a>
            </li>

        </ul>
    </nav>
</header>
