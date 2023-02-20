@extends('layouts.second')
@section('title','Post')

@section('content')

<main class="main-container flex align-center col">
    <section class="post-area">
        <section id="postInfo" class="flex space-between align-center">
            <section class="left flex align-center">
                <a href="/perfil/{{$pergunta->user->id}}/{{$pergunta->user->name}}" id="username">{{ $pergunta->user->name }}</a>
            </section>

            <p>{{$pergunta->updated_at}}</p>
        </section>

        <section class="content">
            <p id="text">{{$pergunta->pergunta}}</p>
            <p id="tagName">#<span>Português</span></p>

        </section>
    </section>

    <section class="comments-area">
        @yield('comments')
    </section>

    <form class="create-comment flex align-center" action="">
        <textarea name="comment" id="create-comment-textarea" maxlength="255" minlength="3" placeholder="Escreva aqui o seu comentário"></textarea>
        <button type="submit" class="flex align-center justify-center comment-button"><ion-icon name="caret-forward-outline" id="send-comment"></ion-icon></button>
    </form>
</main>
@endsection