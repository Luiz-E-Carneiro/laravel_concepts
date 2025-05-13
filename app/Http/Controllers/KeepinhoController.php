<?php

namespace App\Http\Controllers;

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

    public function gravar(Request $request)
    {
        Nota::create($request->all());
        return redirect()->route('keep.index');
    }

    public function editar(Nota $nota, Request $request)
    {
        if($request->isMethod('put')){
            $nota = Nota::find($request->id);
            $nota->texto = $request->texto;
            $nota->save();

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
