<?php

namespace App\Http\Controllers;

use App\Models\Disciplina;
use Illuminate\Http\Request;

class DisciplinaController extends Controller
{
    public function create(){
        return view('disciplina.create');
    }

    public function store(Request $request){
        $disciplina = new Disciplina;
    }
}
