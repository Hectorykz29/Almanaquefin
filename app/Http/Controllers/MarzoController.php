<?php

namespace App\Http\Controllers;

use App\Models\Marzo;
use Illuminate\Http\Request;

class MarzoController extends Controller
{
    public function index(){
        $marzos = Marzo::all();
        return view('mar.index', compact('marzos'));
    }

    public function create(){
        return view('mar.index');
    }

    public function sendData(Request $request){
        $marzos = new Marzo();
        $marzos->fecha = $request->input('fecha');
        $marzos->description = $request->input('description');
        $marzos->save();

        return redirect('/marzos');
    }

    public function edit(Marzo $marzo){
        return view('mar.edit', compact('marzo'));
    }

    public function update(Request $request, Marzo $marzo){
        
        $marzo->fecha = $request->input('fecha');
        $marzo->description = $request->input('description');
        $marzo->save();

        return redirect('/marzos');
    }

    public function destroy(Marzo $marzo){
        $marzo->delete();
        return redirect('/marzos');
    }
}
