<?php

use Illuminate\Support\Facades\Route;
use App\Livewire\Login;
use App\Livewire\ProjectList;

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

Route::get('/login', Login::class); // Ruta para el componente de inicio de sesión
Route::get('/projects', ProjectList::class); // Ruta para el componente de lista de proyectos