<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClientController;

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
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::get('/home',[ClientController::class, 'index'])->name('home.index');
Route::get('/list-produk', [ClientController::class, 'guzzleGet'])->name('guzzle.index');
Route::get('/list-produk-form', [ClientController::class, 'guzzlecreate'])->name('guzzle.form');
Route::post('list-produk-create', [ClientController::class, 'guzzlePost'])->name('guzzle.create');
Route::get('/list-produk/{id}', [ClientController::class, 'guzzleedit'])->name('guzzle.edit');
Route::post('/list-produk/{id}/update', [ClientController::class, 'guzzleUpdate'])->name('guzzle.update');
Route::get('/list-produk/{id}/delete', [ClientController::class, 'guzzleDelete'])->name('guzlle.delete');

require __DIR__.'/auth.php';
