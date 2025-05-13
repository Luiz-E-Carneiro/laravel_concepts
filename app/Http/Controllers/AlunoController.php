<?php

namespace App\Http\Controllers;

use App\Models\Aluno;
use Illuminate\Http\Request;

class AlunoController extends Controller
{
    public function index()
    {
        $alunos = Aluno::all();
        return view('aluno.index', ['alunos' => $alunos]);
    }

    public function gravar(Request $request)
    {
        Aluno::create($request->all());
        return redirect()->route('aluno.index');
    }

    public function editar(Aluno $aluno, Request $request)
    {
        if ($request->isMethod('put')) {
            $aluno = Aluno::find($request->id);
            $aluno->nome = $request->nome;
            $aluno->idade = $request->idade;
            $aluno->turma = $request->turma;
            $aluno->ano = $request->ano;

            $aluno->save();

            return redirect()->route('aluno.index');
        }
        return view('aluno/editar',[
            'aluno' => $aluno
        ]);
    }

    public function deletar(Aluno $aluno){
        $aluno->delete();
        return redirect()->route('aluno.index');
    }
}
