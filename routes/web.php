<?php

use App\Http\Controllers\ProfileController;
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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/index', 'App\Http\Controllers\Home@index')->name('index');
Route::get('/create', 'App\Http\Controllers\Home@create')->name('create');
Route::get('edit/{id}', 'App\Http\Controllers\Home@edit')->name('editp');
Route::post('store', 'App\Http\Controllers\Home@store')->name('storepe');
Route::post('update/{id}', 'App\Http\Controllers\Home@update')->name('updatep');
Route::get('delete/{id}', 'App\Http\Controllers\Home@destroy')->name('deletep');


require __DIR__.'/auth.php';
