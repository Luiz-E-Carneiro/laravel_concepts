<?php

namespace App\Http\Controllers;

use App\Http\Requests\NotaRequest;
use App\Models\Nota;
use Illuminate\Http\Request;

class KeepinhoController extends Controller
{
    public function index()
    {
        $notas = Nota::all();
        // dd($notas);
        return view('keepinho/index', ['notas' => $notas]);
    }

    public function gravar(NotaRequest $request)
    {
        $dados = $request->validated();
        
        Nota::create($dados);
        return redirect()->route('keep.index');
    }

    public function editar(Nota $nota, NotaRequest $request)
    {
        if($request->isMethod('put')){
            $nota = Nota::find($request->id);
            $nota->fill($request->all());

            return redirect()->route('keep.index');
        }
        return view('keepinho/editar', [
            'nota'=>$nota
        ]);
    }

    public function apagar(Nota $nota) {
        $nota->delete();
        return redirect()->route('keep.index');
    }
}
