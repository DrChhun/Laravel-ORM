<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\ProjectController;
use App\Models\Client;

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
    return redirect()->route('dashboard');
});

Route::get('/test', function() {
    $data = Client::find(6)->projects;
    return $data;
});

Route::resource('clients', DashboardController::class)->only('index');

Route::resource('projects', ProjectController::class);

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware(['auth', 'isAdmin'])->group(function () {
    Route::resource('clients', DashboardController::class)->except('index');
    Route::get('/clients/delete/{id}', [ClientController::class, 'destroy']);
    Route::get('/projects/delete/{id}', [ProjectController::class, 'destroy']);
    Route::get('/restore/{id}', [ClientController::class, 'restore']);  
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/xx', function() {
    return "GG";
});

require __DIR__.'/auth.php';
