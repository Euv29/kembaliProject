<x-layouts.main title="Home">

    @foreach ($perguntas as $pergunta)
        <section class="posts-area flex col align-center">
            <section class="post-card flex col align-center justify-center">
                <section class="post-header flex align-center space-between">
                    <section class="user-id flex align-center">
                        <a href="/perfil/{{ $pergunta->user->id }}/{{ $pergunta->user->name }}"
                            id="username">{{ $pergunta->user->name }}</a>
                    </section>
                    <p class="time">{{ $pergunta->updated_at->format('j/m/Y') }}</p>
                </section>

                <section class="post-body">
                    <a href="/perguntas/{{ $pergunta->id }}" id="ask">{{ $pergunta->pergunta }}</a>
                </section>

                <section class="post-footer flex space-between">
                    <ul class="post-tags flex space-evenly">
                        <li class="post-tag"><a href="#" id="tag"><span>#</span>Português</a></li>
                    </ul>
                    <a href="/perguntas/{{ $pergunta->id }}" class="comment">
                        <ion-icon name="chatbubble-outline" id="comment-icon"></ion-icon>
                    </a>
                </section>
            </section>
    @endforeach
    
</x-layouts.main>
