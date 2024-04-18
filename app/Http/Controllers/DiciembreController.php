<?php

namespace App\Http\Controllers;

use App\Models\Diciembre;
use Illuminate\Http\Request;

class DiciembreController extends Controller
{
    public function index(){
        $diciembres = Diciembre::all();
        return view('dic.index', compact('diciembres'));
    }

    public function create(){
        return view('dic.index');
    }

    public function sendData(Request $request){
        $diciembres = new Diciembre();
        $diciembres->fecha = $request->input('fecha');
        $diciembres->description = $request->input('description');
        $diciembres->save();

        return redirect('/diciembres');
    }

    public function edit(Diciembre $diciembre){
        return view('dic.edit', compact('diciembre'));
    }

    public function update(Request $request, Diciembre $diciembre){
        
        $diciembre->fecha = $request->input('fecha');
        $diciembre->description = $request->input('description');
        $diciembre->save();

        return redirect('/diciembres');
    }

    public function destroy(Diciembre $diciembre){
        $diciembre->delete();
        return redirect('/diciembres');
    }
}
