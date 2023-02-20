<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\{
    Pergunta,
    User
};

class PerguntaController extends Controller
{
    public function index()
    {
        $perguntas = Pergunta::orderBy('updated_at', 'desc')->get(); //Para organizar do mais recente ao mais antigo
        return view('pergunta.index', ['perguntas' => $perguntas]);
    }

    public function create()
    {
        return view('pergunta.create');
    }

    public function store(Request $request)
    {
        $perguntas = new Pergunta;
        $usuario = auth()->user();

        $perguntas->pergunta = $request->pergunta;
        $perguntas->imagem = 'Sem imagem';
        $perguntas->user_id = $usuario->id;
        $perguntas->save();

        return redirect(route('index.pergunta'))->with('msg', 'Pergunta Enviada com Sucesso');
    }

    public function show($id)
    {
        $pergunta = Pergunta::findOrFail($id);
        return view('pergunta.show', ['pergunta' => $pergunta]);
    }

    public function dashboard()
    {
        $usuario = auth()->user();
        $perguntas = $usuario->perguntas;

        return view('pergunta.dashboard', ['perguntas' => $perguntas, 'usuario' => $usuario]);
    }

    public function perfil($id)
    {
        $usuario = user::findOrFail($id);
        $perguntas = $usuario->perguntas;

        return view('pergunta.profile', ['perguntas' => $perguntas, 'usuario' => $usuario]);
        
    }
}