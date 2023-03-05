<?php

use App\Http\Controllers\MatiereController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// routes des matieres
Route::resource('matiere', MatiereController::class);
// Route::get('/matiere/liste des matieres', [App\Http\Controllers\MatiereController::class, 'index'])->name('listMatiere');
// Route::get('/matiere/creation de matiere', [App\Http\Controllers\MatiereController::class, 'store'])->name('createMatiere');


// routes des notifications

// routes des types d'interventions

// routes des emplois du temps
