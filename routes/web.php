<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\VacanteController;
use App\Http\Controllers\OfertaController;
use App\Http\Controllers\CuestionarioController;
use App\Http\Controllers\ReclutadorController;
use App\Http\Controllers\WelcomeController;

Route::get('/',[WelcomeController::class,'index'])->name('welcome');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/vacante-index',[VacanteController::class,'index'])->name('vacante.index');
Route::get('/vacante-show/{id}',[VacanteController::class,'show'])->name('vacante.show');
Route::get('/vacante-create',[VacanteController::class,'create'])->name('vacante.create');
Route::post('/reclutarvacante-store',[VacanteController::class,'store'])->name('vacante.store');
Route::get('/reclutarvacante-editar/{vacante}/edit',[VacanteController::class,'edit'])->name('vacante.edit');
Route::patch('/vacante-update/{vacante}',[VacanteController::class,'update'])->name('vacante.update');

//Route::get('/oferta-index',[OfertaController::class,'index'])->name('oferta.index');
Route::resource([
    '' OfertaController::class,'index',
    '' 
]);
Route::get('/cuetionario-create',[CuestionarioController::class,'create'])->name('cuestionario.create');

Route::get('/reclutador-index',[ReclutadorController::class,'index'])->name('reclutador.index');
Route::get('/reclutador-create',[ReclutadorController::class,'create'])->name('reclutador.create');
Route::post('/reclutador-store',[ReclutadorController::class,'store'])->name('reclutador.store');

Auth::routes();