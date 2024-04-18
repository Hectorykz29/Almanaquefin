<?php

namespace App\Http\Controllers;

use App\Models\Octubre;
use Illuminate\Http\Request;

class OctubreController extends Controller
{
    public function index(){
        $octubres = Octubre::all();
        return view('oct.index', compact('octubres'));
    }

    public function create(){
        return view('oct.index');
    }

    public function sendData(Request $request){
        $octubres = new Octubre();
        $octubres->fecha = $request->input('fecha');
        $octubres->description = $request->input('description');
        $octubres->save();

        return redirect('/octubres');
    }

    public function edit(Octubre $octubre){
        return view('set.edit', compact('setiembre'));
    }

    public function update(Request $request, Octubre $octubre){
        
        $octubre->fecha = $request->input('fecha');
        $octubre->description = $request->input('description');
        $octubre->save();

        return redirect('/octubres');
    }

    public function destroy(Octubre $octubre){
        $octubre->delete();
        return redirect('/octubres');
    }
}
