<?php

namespace App\Http\Controllers;

use App\Models\Enero;
use Illuminate\Http\Request;

class EneroController extends Controller
{
    public function index(){
        $eneros = Enero::all();
        return view('ene.index', compact('eneros'));
    }

    public function create(){
        return view('ene.index');
    }

    public function sendData(Request $request){
        $eneros = new Enero();
        $eneros->fecha = $request->input('fecha');
        $eneros->description = $request->input('description');
        $eneros->save();

        return redirect('/eneros');
    }

    public function edit(Enero $enero){
        return view('ene.edit', compact('enero'));
    }

    public function update(Request $request, Enero $enero){
        
        $enero->fecha = $request->input('fecha');
        $enero->description = $request->input('description');
        $enero->save();

        return redirect('/eneros');
    }

    public function destroy(Enero $enero){
        $enero->delete();
        return redirect('/eneros');
    }
}
