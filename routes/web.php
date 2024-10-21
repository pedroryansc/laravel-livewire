<?php

use Illuminate\Support\Facades\Route;

use App\Livewire\Counter;
use App\Livewire\Afazeres;
use App\Livewire\Polling;
use App\Livewire\Usuarios;
use App\Livewire\CriarUsuario;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


Route::get('/', function () {
    return view('welcome');
});

Route::get("/counter", Counter::class)->name("counter");

Route::get("/afazeres", Afazeres::class)->name("afazeres");

Route::get("/polling", Polling::class);

Route::get("/usuarios", Usuarios::class);

Route::get("/criarUsuarios", CriarUsuario::class);