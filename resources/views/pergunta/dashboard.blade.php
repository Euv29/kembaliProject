<x-layouts.profile title="Dashboard">
    <x-layouts.headers.profile-header />

    <main class="main-container flex align-center col">
        <section class="posts-area flex col align-center">
            <section class="data-profile flex justify-center align-center col">
                <section class="profile-img">
                    <img src="/img/profile.jpg" alt="">
                </section>
                <section class="username flex align-center" id="username">
                    {{ $usuario->name }}
                </section>

                <section class="profile-options flex align-center">
                    <a href="{{ route('profile.edit') }}" class="flex align-center dashboard-link">
                        <ion-icon name="create-outline" id="edit-icon"></ion-icon>
                        <p>Editar</p>
                    </a>

                    <a href="{{ route('logout') }}" class="flex align-center dashboard-link"
                        onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                        <ion-icon name="log-out-outline"></ion-icon>
                        <p>Sair</p>
                    </a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                </section>

                <section class="contagem flex space-evenly">
                    <section class="flex col align-center">
                        <div>Publicações</div>
                        <div class="count-box publicações">139</div>
                    </section>
                    <section class="flex col align-center">
                        <div>Comentarios</div>
                        <div class="count-box comentarios">1,23 k</div>
                    </section>
                </section>
            </section>

            <section class="dashboard-posts">

                @foreach ($perguntas as $pergunta)
                    <section class="posts-area flex col align-center">
                        <section class="post-card flex col align-center justify-center">
                            <section class="post-header flex align-center space-between">
                                <section class="user-id flex align-center">
                                    <p id="username">{{ $pergunta->user->name }}</p>
                                </section>
                                <p class="time">{{ $pergunta->updated_at->format('j M Y, g:i a') }}</p>
                            </section>

                            <section class="post-body">
                                <a href="/perguntas/{{ $pergunta->id }}" id="ask">{{ $pergunta->pergunta }}</a>
                            </section>

                            <section class="post-footer flex space-between">
                                <ul class="post-tags flex space-evenly">
                                    <li class="post-tag"><a href="#" id="tag"><span>#</span>Português</a>
                                    </li>
                                </ul>
                                <a href="/perguntas/{{ $pergunta->id }}" class="comment">
                                    <ion-icon name="chatbubble-outline" id="comment-icon"></ion-icon>
                                </a>
                            </section>
                        </section>
                @endforeach
            </section>
        </section>
    </main>

    <x-layouts.footer />
</x-layouts.profile>
