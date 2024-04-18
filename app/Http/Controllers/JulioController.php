<?php

namespace App\Http\Controllers;

use App\Models\Julio;
use Illuminate\Http\Request;

class JulioController extends Controller
{
    public function index(){
        $julios = Julio::all();
        return view('jul.index', compact('julios'));
    }

    public function create(){
        return view('jul.index');
    }

    public function sendData(Request $request){
        $julios = new Julio();
        $julios->fecha = $request->input('fecha');
        $julios->description = $request->input('description');
        $julios->save();

        return redirect('/julios');
    }

    public function edit(Julio $julio){
        return view('jul.edit', compact('julio'));
    }

    public function update(Request $request, Julio $julio){
        
        $julio->fecha = $request->input('fecha');
        $julio->description = $request->input('description');
        $julio->save();

        return redirect('/julios');
    }

    public function destroy(Julio $julio){
        $julio->delete();
        return redirect('/julios');
    }
}
