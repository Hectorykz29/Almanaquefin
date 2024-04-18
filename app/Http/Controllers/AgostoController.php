<?php

namespace App\Http\Controllers;

use App\Models\Agosto;
use Illuminate\Http\Request;

class AgostoController extends Controller
{
    public function index(){
        $agostos = Agosto::all();
        return view('ago.index', compact('agostos'));
    }

    public function create(){
        return view('ago.index');
    }

    public function sendData(Request $request){
        $agostos = new Agosto();
        $agostos->fecha = $request->input('fecha');
        $agostos->description = $request->input('description');
        $agostos->save();

        return redirect('/agostos');
    }

    public function edit(Agosto $agosto){
        return view('ago.edit', compact('agosto'));
    }

    public function update(Request $request, Agosto $agosto){
        
        $agosto->fecha = $request->input('fecha');
        $agosto->description = $request->input('description');
        $agosto->save();

        return redirect('/agostos');
    }

    public function destroy(Agosto $agosto){
        $agosto->delete();
        return redirect('/agostos');
    }
}
