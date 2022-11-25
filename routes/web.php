<?php

use App\Http\Controllers\controladorVistas;
use App\Http\Controllers\controladorBD;

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

//ruta de controladorBD, Create
Route::get('recuerdo/create',[controladorBD::class,'create']) -> name('recuerdo.create');

//ruta de controladorBD, Store
Route::post('recuerdo',[controladorBD::class,'store']) -> name('recuerdo.store');

//Ruta de controladorBD, Index
Route::get('Recuerdo',[controladorBD::class,'index']) -> name('recuerdo.index');

//Ruta de controladorBD, Editar
Route::get('Recuerdo/{id}/edit',[controladorBD::class,'edit']) ->name('recuerdo.edit');

//Edit
Route::put('Recuerdo/{id}',[controladorBD::class,'update']) ->name('recuerdo.update');

//vista delete
Route::get('Recuerdo/{id}/show',[controladorBD::class,'show'])->name('recuerdo.show');

//Delete
Route::delete('recuerdo/{id}',[controladorBD::class,'destroy'])->name('recuerdo.destroy');


/*Rutas Agrupadas*/
Route::controller(controladorVistas::class)->group
    (function(){
        Route::get('/','showWelcome');
        Route::get('home','showHome') -> name('home') ;
        Route::get('recuerdo','showRecuerdos') -> name('recu');
        Route::get('ingresar','showIngresar') -> name('regis');
    }
);