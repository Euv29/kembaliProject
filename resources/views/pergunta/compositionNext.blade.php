@extends('layouts.second')

@section('title', 'Postar')

@section('content')
<section class="postar flex justify-center align-center col">
     <form action="">
          <section class="subject flex align-center col">
               <label for="">Diciplina</label>
               <input type="text">
          </section>
          <section class="flex align-center col">
               <label for="">Nível De Ensino</label>
               <section class="flex align-center space-evenly">
                    <section class="flex col align-center space-evenly">
                         <div class="List-Elemente">
                              <label class="option">
                                   Primário
                                   <input id="ant" name="base" type="radio" value="S" />
                              </label>
                         </div>
                         <div class="List-Elemente">
                              <label class="option">
                                   I Ciclo
                                   <input id="grade" name="base" type="radio" value="S" />
                              </label>
                         </div>
                    </section>
                    <section class="flex col align-center space-evenly">
                         <div class="List-Elemente">
                              <label class="option">
                                   Médio
                                   <input id="ant" name="base" type="radio" value="S" />
                              </label>
                         </div>
                         <div class="List-Elemente">
                              <label class="option">
                                   Superior
                                   <input id="grade" name="base" type="radio" value="S" />
                              </label>
                         </div>
                    </section>
               </section>
          </section>

          <section class="flex postar-btn align-center col">
               <button type="submit" class="btn post-me">POSTAR</button>
          </section>
     </form>
</section>
@endsection