<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\TurmasController;
use App\Http\Controllers\AlocadorController;
use App\Http\Controllers\SalaController;
use Illuminate\Http\Request;
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
Route::get('/',[UserController::class,'login'])->name('login.page');
Route::get('/login',[UserController::class,'login'])->name('login.page');
Route::post("/auth",[UserController::class,'auth'])-> name('auth.user');
Route::get('/login',[UserController::class,'logout'])->name('login.logout');


//Mostrar dados da tabela turmas
Route::middleware(['auth'])->group(function()
{
    Route::get('/auth/principal',[TurmasController::class,'index'])->name('importacao');
});

Route::post('/importar-turmas', [TurmasController::class,'import']);
Route::post('/alocar-salas', [AlocadorController::class,'automatica']);
Route::post('/deleta', [AlocadorController::class,'delete']);
//Route::post('/finalizar-alocacao', [TurmasController::class,'finalizar']);
Route::post('/finalizar-alocacao', [SalaController::class,'index']);


Route::get('/logout', function(){
    return view('welcome');
});
Route::get('/tabela', function(){
    return view('tabela');
});

Route::get('/salas', function(){
    return view('salas');
});

/*Route::get('/teste', function(){
    return view([SalaController::class,'index']);
});*/

/*Route::get('/principal',function(){
    return view('principal');
});*/