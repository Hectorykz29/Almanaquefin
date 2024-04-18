<?php

namespace App\Http\Controllers;

use App\Models\Junio;
use Illuminate\Http\Request;

class JunioController extends Controller
{
    public function index(){
        $junios = Junio::all();
        return view('jun.index', compact('junios'));
    }

    public function create(){
        return view('jun.index');
    }

    public function sendData(Request $request){
        $junios = new Junio();
        $junios->fecha = $request->input('fecha');
        $junios->description = $request->input('description');
        $junios->save();

        return redirect('/junios');
    }

    public function edit(Junio $mayo){
        return view('jun.edit', compact('junio'));
    }

    public function update(Request $request, Junio $junio){
        
        $junio->fecha = $request->input('fecha');
        $junio->description = $request->input('description');
        $junio->save();

        return redirect('/junios');
    }

    public function destroy(Junio $junio){
        $junio->delete();
        return redirect('/junios');
    }
}
