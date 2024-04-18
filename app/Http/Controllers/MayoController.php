<?php

namespace App\Http\Controllers;

use App\Models\Mayo;

use Illuminate\Http\Request;

class MayoController extends Controller
{
    public function index(){
        $mayos = Mayo::all();
        return view('may.index', compact('mayos'));
    }

    public function create(){
        return view('may.index');
    }

    public function sendData(Request $request){
        $mayos = new Mayo();
        $mayos->fecha = $request->input('fecha');
        $mayos->description = $request->input('description');
        $mayos->save();

        return redirect('/mayos');
    }

    public function edit(Mayo $mayo){
        return view('may.edit', compact('mayo'));
    }

    public function update(Request $request, Mayo $mayo){
        
        $mayo->fecha = $request->input('fecha');
        $mayo->description = $request->input('description');
        $mayo->save();

        return redirect('/mayos');
    }

    public function destroy(Mayo $mayo){
        $mayo->delete();
        return redirect('/mayos');
    }
}
