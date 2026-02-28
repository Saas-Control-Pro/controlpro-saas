<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Mail;

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

Route::middleware(['auth', 'empresa.activa'])->group(function () {
    Route::resource('productos', \App\Http\Controllers\ProductoController::class);
});

//para cambiar color del tema por usuario
Route::post('/tema', function (Illuminate\Http\Request $request) {

    $request->validate([
        'theme' => 'required|in:light,dark'
    ]);

    auth()->user()->update([
        'theme' => $request->theme
    ]);

    return back();

})->middleware('auth')->name('cambiar.tema');



require __DIR__.'/auth.php';



Route::get('/test-mail', function () {
    Mail::raw('Correo de prueba', function ($message) {
        $message->to('dmdesarrollodesarrollo@gmail.com')
                ->subject('Test Laravel');
    });

    return 'Correo enviado';
});


Route::prefix('paquete')->middleware(['auth', 'empresa.activa'])->group(function () {

Route::get('/', [\App\Http\Controllers\PaqueteController::class, 'index'])->name('paquetes.index');
Route::get('/paquetes/create', [\App\Http\Controllers\PaqueteController::class, 'create'])->name('paquetes.create');
Route::post('/paquetes', [\App\Http\Controllers\PaqueteController::class, 'store'])->name('paquetes.store');
Route::get('/paquetes/{id}', [\App\Http\Controllers\PaqueteController::class, 'show'])->name('paquetes.show');
Route::get('/paquetes/{id}/edit', [\App\Http\Controllers\PaqueteController::class, 'edit'])->name('paquetes.edit');
Route::put('/paquetes/{id}', [\App\Http\Controllers\PaqueteController::class, 'update'])->name('paquetes.update');
Route::delete('/paquetes/{id}', [\App\Http\Controllers\PaqueteController::class, 'destroy'])->name('paquetes.destroy');

});

Route::prefix('motorista')->middleware(['auth', 'empresa.activa'])->group(function () {
    Route::get('/', [\App\Http\Controllers\MotoristaController::class, 'index'])->name('motoristas.index');
    Route::get('/motoristas/create', [\App\Http\Controllers\MotoristaController::class, 'create'])->name('motoristas.create');
    Route::post('/motoristas', [\App\Http\Controllers\MotoristaController::class, 'store'])->name('motoristas.store');
    Route::get('/motoristas/{id}', [\App\Http\Controllers\MotoristaController::class, 'show'])->name('motoristas.show');
    Route::get('/motoristas/{id}/edit', [\App\Http\Controllers\MotoristaController::class, 'edit'])->name('motoristas.edit');
    Route::put('/motoristas/{id}', [\App\Http\Controllers\MotoristaController::class, 'update'])->name('motoristas.update');
    Route::delete('/motoristas/{id}', [\App\Http\Controllers\MotoristaController::class, 'destroy'])->name('motoristas.destroy');
});

Route::prefix('cliente')->middleware(['auth', 'empresa.activa'])->group(function () {
    Route::get('/', [\App\Http\Controllers\ClienteController::class, 'index'])->name('clientes.index');
    Route::get('/clientes/create', [\App\Http\Controllers\ClienteController::class, 'create'])->name('clientes.create');
    Route::post('/clientes', [\App\Http\Controllers\ClienteController::class, 'store'])->name('clientes.store');
    Route::get('/clientes/{id}', [\App\Http\Controllers\ClienteController::class, 'show'])->name('clientes.show');
    Route::get('/clientes/{id}/edit', [\App\Http\Controllers\ClienteController::class, 'edit'])->name('clientes.edit');
    Route::put('/clientes/{id}', [\App\Http\Controllers\ClienteController::class, 'update'])->name('clientes.update');
    Route::delete('/clientes/{id}', [\App\Http\Controllers\ClienteController::class, 'destroy'])->name('clientes.destroy');
});
