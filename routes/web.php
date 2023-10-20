<?php

use App\Http\Controllers\AgentController;
use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ReservationController;
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

Route::get('/', [CarsController::class, 'derniersEnregistrements'])->name('home');

/*Route::get('/', function () {
    return view('index');
});*/

// Route::get('/dashboard', function () {
//     return view('index');
// })->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/information', function () {
    return view('info');
});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
  //  Route::get('/cars/{id}/information', [ReservationController::class, 'getData'])->name('information');
 //  Route::get('/user-data', [ReservationController::class, 'getDataUser'])->name('information');

  Route::get('/information', [ReservationController::class, 'getData'])->name('information');


});

Route::middleware(['auth','admin'])->group(function () {
    Route::get('/admin/dashboard', [Admincontroller::class, 'dashboard'])->name('admin.dashboard');
    Route::get('/admin/ajout', [Admincontroller::class, 'ajout'])->name('admin.ajout');
    Route::get('/admin/liste', [Admincontroller::class, 'liste'])->name('admin.liste');
    Route::get('/admin/listevente', [Admincontroller::class, 'listevente'])->name('admin.listevente');
    Route::get('/admin/personnel', [CarsController::class, 'utilisateur'])->name('admin.personnel');
    Route::post('/cars/store', [CarsController::class, 'store'])->name('cars.store');
    Route::get('/admin/liste', [CarsController::class, 'index'])->name('admin.liste');
    Route::delete('/cars/{id}', [CarsController::class, 'destroy'])->name('cars.destroy');
    Route::get('/user/{id}/modifier', [RegisteredUserController::class, 'edite'])->name('admin.edite');
    Route::post('/user/{id}/update', [RegisteredUserController::class, 'modifier'])->name('admin.modifier');
    Route::delete('/user/{id}', [RegisteredUserController::class, 'destroy'])->name('admin.personnele');
    Route::get('/cars/{id}/form', [CarsController::class, 'form'])->name('admin.form');
    Route::post('/cars/{id}/update', [CarsController::class, 'update'])->name('admin.update');
    Route::get('/admin/reservation', [Admincontroller::class, 'reservation'])->name('admin.reservation');
});


    Route::get('/agent/dashboard', [AgentController::class, 'dashboard'])->name('agent.dashboard');
    Route::get('/agent/ajout', [AgentController::class, 'ajout'])->name('agent.ajout');
    Route::get('/agent/liste', [AgentController::class, 'liste'])->name('agent.liste');
    Route::get('/agent/listevente', [AgentController::class, 'listevente'])->name('agent.listevente');
    Route::post('/cars/store', [CarsController::class, 'store'])->name('cars.store');
    Route::get('/agent/liste', [CarsController::class, 'indes'])->name('agent.liste');
    Route::delete('/cars/{id}', [CarsController::class, 'destroy'])->name('cars.destroy');
    Route::get('/cars/{id}/edit', [CarsController::class, 'edits'])->name('agent.edits');
   Route::post('/cars/{id}/Agentupdate', [CarsController::class, 'update'])->name('agent.update');
    Route::get('/agent/Reservation', [AgentController::class, 'reservation'])->name('agent.reservation');




require __DIR__.'/auth.php';
