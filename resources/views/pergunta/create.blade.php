@extends('layouts.second')

@section('title', 'Postar')

@section('content')

@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<form action="{{ route('store.pergunta') }}" method="post" class="composition-area" enctype="multipart/form-data">
     @csrf
     <section class="composition-box">
          <textarea name="pergunta" id="pergunta" cols="30" rows="10" placeholder="Escreva aqui sua dúvida..."></textarea>
     </section>
     <br>

     <section class="AddImg flex align-center">
          <h4 class="AddImg-text">Adicionar Imagem</h4>
          <div id="show">
               <ion-icon name="chevron-down-sharp" onclick="showImgArea()"></ion-icon>
          </div>
     </section>

     <section class="imgArea">
          <input type="file" accept="image/" name="image" id="image">
          <label for="image" id="uploadImg" tabindex="0">
               <span id="imgzone-image"></span>
          </label>
     </section>

     <section class="flex align-center col">
          <button type="submit" class="btn post-me">CONTINUAR</button>
     </section>
</form>
@endsection