<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CarsController;
use App\Http\Controllers\Admincontroller;

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
    return view('index');
});

Route::get('/dashboard', function () {
    return view('index');
})->middleware(['auth', 'verified'])->name('dashboard');


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::middleware(['auth','admin'])->group(function () {
    Route::get('/admin/dashboard', [Admincontroller::class, 'dashboard'])->name('admin.dashboard');
    Route::get('/admin/ajout', [Admincontroller::class, 'ajout'])->name('admin.ajout');
    Route::get('/admin/liste', [Admincontroller::class, 'liste'])->name('admin.liste');
    Route::post('/cars/store', [CarsController::class, 'store'])->name('cars.store');
    Route::get('/admin/liste', [CarsController::class, 'index'])->name('admin.liste');
    Route::delete('/montres/{id}', [CarsController::class, 'destroy'])->name('cars.destroy');

});



require __DIR__.'/auth.php';
