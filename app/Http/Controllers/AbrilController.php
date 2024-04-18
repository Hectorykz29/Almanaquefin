<?php

namespace App\Http\Controllers;

use App\Models\Abril;
use Illuminate\Http\Request;

class AbrilController extends Controller
{
    
    public function index(){
        $abrils = Abril::all();
        return view('abr.index', compact('abrils'));
    }

    public function create(){
        return view('abr.index');
    }

    public function sendData(Request $request){
        $abrils = new Abril();
        $abrils->fecha = $request->input('fecha');
        $abrils->description = $request->input('description');
        $abrils->save();

        return redirect('/abrils');
    }

    public function edit(Abril $abril){
        return view('abr.edit', compact('abril'));
    }

    public function update(Request $request, Abril $abril){
        
        $abril->fecha = $request->input('fecha');
        $abril->description = $request->input('description');
        $abril->save();

        return redirect('/abrils');
    }

    public function destroy(Abril $abril){
        $abril->delete();
        return redirect('/abrils');
    }
}
