<?php

use App\Http\Controllers\BinnacleController;
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
use App\Http\Controllers\GlobalReportController;
use App\Http\Controllers\UserUploadController;
use App\Http\Controllers\FileUploadController;
use App\Http\Controllers\FAQController;
use App\Http\Controllers\UserController;
use App\Models\Category;
use App\Models\Entity;

Route::get('/', function () {
    $categories = Category::all();
    $entities = Entity::all();
    return view('welcome')->with('categories', $categories)->with('entities', $entities);
});

Route::get('/dashboard', function () {
    $categories = Category::all();
    $entities = Entity::all();
    return view('welcome')->with('categories', $categories)->with('entities', $entities);
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {

    Route::get('/descargar-archivo/{nombreArchivo}', function ($nombreArchivo) {
        $rutaArchivo = Storage::path($nombreArchivo);
        return response()->download($rutaArchivo);
    })->name('descargar.archivo');

    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::resource('infraestructure', InfraestructureController::class);
    Route::resource('enviroment', EnviromentController::class);
    Route::resource('energy_climate_change', Energy_climate_changeController::class);
    Route::resource('waste', WasteController::class);
    Route::resource('responsible_consumption', Responsible_consumptionController::class);
    Route::resource('water', WaterController::class);
    Route::resource('transport', TransportController::class);
    Route::resource('education_research', Education_researchController::class);
    Route::resource('history', HistoryController::class);
    Route::resource('binnacle', BinnacleController::class);
    Route::resource('report', GlobalReportController::class);
    Route::resource('filesUpload', FileUploadController::class);
    Route::resource('FAQ', FAQController::class);
    Route::resource('user', UserController::class);


});
Route::resource('usersUpload', UserUploadController::class);



require __DIR__ . '/auth.php';
