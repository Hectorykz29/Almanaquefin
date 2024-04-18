<?php

namespace App\Http\Controllers;

use App\Models\Setiembre;
use Illuminate\Http\Request;

class SetiembreController extends Controller
{
    public function index(){
        $setiembres = Setiembre::all();
        return view('set.index', compact('setiembres'));
    }

    public function create(){
        return view('set.index');
    }

    public function sendData(Request $request){
        $setiembres = new Setiembre();
        $setiembres->fecha = $request->input('fecha');
        $setiembres->description = $request->input('description');
        $setiembres->save();

        return redirect('/setiembres');
    }

    public function edit(Setiembre $setiembre){
        return view('set.edit', compact('setiembre'));
    }

    public function update(Request $request, Setiembre $setiembre){
        
        $setiembre->fecha = $request->input('fecha');
        $setiembre->description = $request->input('description');
        $setiembre->save();

        return redirect('/setiembres');
    }

    public function destroy(Setiembre $setiembre){
        $setiembre->delete();
        return redirect('/setiembres');
    }
}
