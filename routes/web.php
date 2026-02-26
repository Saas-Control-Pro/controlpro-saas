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


Route::prefix('paquetes')->middleware(['auth', 'empresa.activa'])->group(function () {


    Route::resource('paquetes', \App\Http\Controllers\PaqueteController::class);
    Route::resource('motoristas', \App\Http\Controllers\MotoristaController::class);
    Route::resource('clientes', \App\Http\Controllers\ClienteController::class);
});

