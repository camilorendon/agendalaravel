<?php

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
    return view('auth.login');
});

Auth::routes();
Route::resource('contactos', App\Http\Controllers\ContactoController::class)->middleware('auth');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::group(['middleware' => ['bouncer:admin']], function () {
    // Rutas protegidas por el middleware 'bouncer:admin'
    // Aquí van las rutas que solo pueden ser accedidas por usuarios con el rol de 'admin'
});

Route::middleware(['bouncer:admin'])->group(function () {
    Route::resource('roles', 'RoleController');
});
