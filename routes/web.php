<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\InfraestructureController;
use App\Http\Controllers\EnviromentController;
use App\Http\Controllers\Energy_climate_changeController;
use App\Http\Controllers\Responsible_consumptionController;
use App\Http\Controllers\WasteController;
use App\Http\Controllers\WaterController;
use App\Http\Controllers\TransportController;
use App\Http\Controllers\Education_researchController;
use App\Http\Controllers\HistoryController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/dashboard2', function () {
    return view('dashboard2 ');
})->middleware(['auth', 'verified'])->name('dashboard2');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/infraestructura', function () {
    return view('forms/infraestructura');
})->name('infraestructura');	

Route::resource('infraestructure', InfraestructureController::class);
Route::resource('enviroment', EnviromentController::class);
Route::resource('energy_climate_change', Energy_climate_changeController::class);
Route::resource('waste', WasteController::class);
Route::resource('responsible_consumption', Responsible_consumptionController::class);
Route::resource('water', WaterController::class);
Route::resource('transport', TransportController::class);
Route::resource('education_research', Education_researchController::class);
Route::resource('history', HistoryController::class);


require __DIR__.'/auth.php';
