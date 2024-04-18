<?php

use App\Http\Controllers\configuraciones\TimezoneLang;
use App\Http\Controllers\InicioController;
use Illuminate\Support\Facades\App;
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


// ruta para cambio de zona horaria aplica para guardar la hora correcta en la base de datos
Route::post('set-timezone', [TimezoneLang::class, 'setTimezone']);
// configuracion para cambio de idioma de la aplicacion
Route::get('lang/{lang}', function ($lang) {
    session(['lang' => $lang]);
    //     // config(['app.locale' => $lang]);
    //     App::setLocale($lang);
    //     echo $lang;
    return redirect()->back();
});


Route::get('/', [InicioController::class, 'index'])->name('inicio.index');
Route::get('secundario', [InicioController::class, 'secundario'])->name('inicio.secundario');
