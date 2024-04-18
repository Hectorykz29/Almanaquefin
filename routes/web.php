<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('index');
});

Route::get('/eneros', [App\Http\Controllers\EneroController::class, 'index']);
Route::get('/eneros/create', [App\Http\Controllers\EneroController::class, 'create']);
Route::get('/eneros/{enero}/edit', [App\Http\Controllers\EneroController::class, 'edit']);
Route::post('/eneros', [App\Http\Controllers\EneroController::class, 'sendData']);
Route::put('/eneros/{enero}', [App\Http\Controllers\EneroController::class, 'update']);
Route::delete('/eneros/{enero}', [App\Http\Controllers\EneroController::class, 'destroy']);

Route::get('/febreros', [App\Http\Controllers\FebreroController::class, 'index']);
Route::get('/febreros/create', [App\Http\Controllers\FebreroController::class, 'create']);
Route::get('/febreros/{febrero}/edit', [App\Http\Controllers\FebreroController::class, 'edit']);
Route::post('/febreros', [App\Http\Controllers\FebreroController::class, 'sendData']);
Route::put('/febreros/{febrero}', [App\Http\Controllers\FebreroController::class, 'update']);
Route::delete('/febreros/{febrero}', [App\Http\Controllers\FebreroController::class, 'destroy']);

Route::get('/marzos', [App\Http\Controllers\MarzoController::class, 'index']);
Route::get('/marzos/create', [App\Http\Controllers\MarzoController::class, 'create']);
Route::get('/marzos/{marzo}/edit', [App\Http\Controllers\MarzoController::class, 'edit']);
Route::post('/marzos', [App\Http\Controllers\MarzoController::class, 'sendData']);
Route::put('/marzos/{marzo}', [App\Http\Controllers\MarzoController::class, 'update']);
Route::delete('/marzos/{marzo}', [App\Http\Controllers\MarzoController::class, 'destroy']);

Route::get('/abrils', [App\Http\Controllers\AbrilController::class, 'index']);
Route::get('/abrils/create', [App\Http\Controllers\AbrilController::class, 'create']);
Route::get('/abrils/{abril}/edit', [App\Http\Controllers\AbrilController::class, 'edit']);
Route::post('/abrils', [App\Http\Controllers\AbrilController::class, 'sendData']);
Route::put('/abrils/{abril}', [App\Http\Controllers\AbrilController::class, 'update']);
Route::delete('/abrils/{abril}', [App\Http\Controllers\AbrilController::class, 'destroy']);

Route::get('/mayos', [App\Http\Controllers\MayoController::class, 'index']);
Route::get('/mayos/create', [App\Http\Controllers\MayoController::class, 'create']);
Route::get('/mayos/{mayo}/edit', [App\Http\Controllers\MayoController::class, 'edit']);
Route::post('/mayos', [App\Http\Controllers\MayoController::class, 'sendData']);
Route::put('/mayos/{mayo}', [App\Http\Controllers\MayoController::class, 'update']);
Route::delete('/mayos/{mayo}', [App\Http\Controllers\MayoController::class, 'destroy']);

Route::get('/junios', [App\Http\Controllers\JunioController::class, 'index']);
Route::get('/junios/create', [App\Http\Controllers\JunioController::class, 'create']);
Route::get('/junios/{junio}/edit', [App\Http\Controllers\JunioController::class, 'edit']);
Route::post('/junios', [App\Http\Controllers\JunioController::class, 'sendData']);
Route::put('/junios/{junio}', [App\Http\Controllers\JunioController::class, 'update']);
Route::delete('/junios/{junio}', [App\Http\Controllers\JunioController::class, 'destroy']);

Route::get('/julios', [App\Http\Controllers\JulioController::class, 'index']);
Route::get('/julios/create', [App\Http\Controllers\JulioController::class, 'create']);
Route::get('/julios/{julio}/edit', [App\Http\Controllers\JulioController::class, 'edit']);
Route::post('/julios', [App\Http\Controllers\JulioController::class, 'sendData']);
Route::put('/julios/{julio}', [App\Http\Controllers\JulioController::class, 'update']);
Route::delete('/julios/{julio}', [App\Http\Controllers\JulioController::class, 'destroy']);


Route::get('/agostos', [App\Http\Controllers\AgostoController::class, 'index']);
Route::get('/agostos/create', [App\Http\Controllers\AgostoController::class, 'create']);
Route::get('/agostos/{agosto}/edit', [App\Http\Controllers\AgostoController::class, 'edit']);
Route::post('/agostos', [App\Http\Controllers\AgostoController::class, 'sendData']);
Route::put('/agostos/{agosto}', [App\Http\Controllers\AgostoController::class, 'update']);
Route::delete('/agostos/{agosto}', [App\Http\Controllers\AgostoController::class, 'destroy']);

Route::get('/setiembres', [App\Http\Controllers\SetiembreController::class, 'index']);
Route::get('/setiembres/create', [App\Http\Controllers\SetiembreController::class, 'create']);
Route::get('/setiembres/{setiembre}/edit', [App\Http\Controllers\SetiembreController::class, 'edit']);
Route::post('/setiembres', [App\Http\Controllers\SetiembreController::class, 'sendData']);
Route::put('/setiembres/{setiembre}', [App\Http\Controllers\SetiembreController::class, 'update']);
Route::delete('/setiembres/{setiembre}', [App\Http\Controllers\SetiembreController::class, 'destroy']);

Route::get('/octubres', [App\Http\Controllers\OctubreController::class, 'index']);
Route::get('/octubres/create', [App\Http\Controllers\OctubreController::class, 'create']);
Route::get('/octubres/{octubre}/edit', [App\Http\Controllers\OctubreController::class, 'edit']);
Route::post('/octubres', [App\Http\Controllers\OctubreController::class, 'sendData']);
Route::put('/octubres/{octubre}', [App\Http\Controllers\OctubreController::class, 'update']);
Route::delete('/octubres/{octubre}', [App\Http\Controllers\OctubreController::class, 'destroy']);

Route::get('/noviembres', [App\Http\Controllers\NoviembreController::class, 'index']);
Route::get('/noviembres/create', [App\Http\Controllers\NoviembreController::class, 'create']);
Route::get('/noviembres/{noviembre}/edit', [App\Http\Controllers\NoviembreController::class, 'edit']);
Route::post('/noviembres', [App\Http\Controllers\NoviembreController::class, 'sendData']);  
Route::put('/noviembres/{noviembre}', [App\Http\Controllers\NoviembreController::class, 'update']);
Route::delete('/noviembres/{noviembre}', [App\Http\Controllers\NoviembreController::class, 'destroy']);

Route::get('/diciembres', [App\Http\Controllers\DiciembreController::class, 'index']);
Route::get('/diciembres/create', [App\Http\Controllers\DiciembreController::class, 'create']);
Route::get('/diciembres/{diciembre}/edit', [App\Http\Controllers\DiciembreController::class, 'edit']);
Route::post('/diciembres', [App\Http\Controllers\DiciembreController::class, 'sendData']);
Route::put('/diciembres/{diciembre}', [App\Http\Controllers\DiciembreController::class, 'update']);
Route::delete('/diciembres/{diciembre}', [App\Http\Controllers\DiciembreController::class, 'destroy']);




