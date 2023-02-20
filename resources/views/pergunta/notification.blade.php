@extends('layouts.second')

@section('title', 'Notificações')

@section('content')
<section class="notification-card-container flex justify-center">
    <section class="notification-card flex align-center">
        <section class="profile-pic-area">
            <img src="/img/profile.jpg" alt="Foto de perfil" id="profile-pic">
        </section>
        <section class="text-area flex align-center">
            <span id="username">Hélcio</span>
            <p class="text">Respondeu o seu post.me</p>
        </section>
    </section>
</section>
@endsection