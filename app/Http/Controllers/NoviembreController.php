<?php

namespace App\Http\Controllers;

use App\Models\Noviembre;
use Illuminate\Http\Request;

class NoviembreController extends Controller
{
    public function index(){
        $noviembres = Noviembre::all();
        return view('nov.index', compact('noviembres'));
    }

    public function create(){
        return view('nov.index');
    }

    public function sendData(Request $request){
        $noviembres = new Noviembre();
        $noviembres->fecha = $request->input('fecha');
        $noviembres->description = $request->input('description');
        $noviembres->save();

        return redirect('/noviembres');
    }

    public function edit(Noviembre $noviembre){
        return view('nov.edit', compact('noviembre'));
    }

    public function update(Request $request, Noviembre $noviembre){
        
        $noviembre->fecha = $request->input('fecha');
        $noviembre->description = $request->input('description');
        $noviembre->save();

        return redirect('/noviembres');
    }

    public function destroy(Noviembre $noviembre){
        $noviembre->delete();
        return redirect('/noviembres');
    }
}
