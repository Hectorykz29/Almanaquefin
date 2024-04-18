<?php

namespace App\Http\Controllers;

use App\Models\Febrero;
use Illuminate\Http\Request;

class FebreroController extends Controller
{
    public function index(){
        $febreros = Febrero::all();
        return view('feb.index', compact('febreros'));
    }

    public function create(){
        return view('feb.index');
    }

    public function sendData(Request $request){
        $febreros = new Febrero();
        $febreros->fecha = $request->input('fecha');
        $febreros->description = $request->input('description');
        $febreros->save();

        return redirect('/febreros');
    }

    public function edit(Febrero $febrero){
        return view('feb.edit', compact('febrero'));
    }

    public function update(Request $request, Febrero $febrero){
        
        $febrero->fecha = $request->input('fecha');
        $febrero->description = $request->input('description');
        $febrero->save();

        return redirect('/febreros');
    }

    public function destroy(Febrero $febrero){
        $febrero->delete();
        return redirect('/febreros');
    }
}
