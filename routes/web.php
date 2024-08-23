<?php

use Illuminate\Support\Facades\App;

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\SiteController;
use App\Http\Controllers\EstacaoController;
use App\Http\Controllers\ClienteController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DocaController;
use App\Http\Controllers\BicletaController;
use App\Http\Controllers\AluguelController;
use App\Http\Controllers\UserController;
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

Route::get('/', [SiteController::class, 'index'])->name('site.home');

Route::get('/login', [LoginController::class, 'index'])->name('login.logar');

Route::get('/login/create', [LoginController::class, 'create'])->name('login.create');


Route::post('/cliente/create/acount', [ClienteController::class, 'store'])->name('cliente.create.acount');


Route::post('/login/form/auth', [LoginController::class, 'auth'])->name('login.form.auth');

Route::get('/logout/form', [LoginController::class, 'logout'])->name('user.form.logout');

Route::get('/logout/form', [LoginController::class, 'logout'])->name('user.form.logout')->middleware('auth');


Route::get('/admin/dashboard/login', [DashboardController::class, 'index'])->name('admin.dashboard');


// ADMIN ESTAÇÃO

Route::get('/admin/dashboard/estacao', [EstacaoController::class, 'index'])->name('estacao');

Route::post('/createEstacao', [EstacaoController::class,'create'])->name('admin.createEstacao');

// FIM ADMIN ESTAÇÃO

// ADMIN DOCA

Route::get('/admin/dashboard/doca', [DocaController::class, 'index'])->name('doca');

Route::get('/admin/dashboard/indexUpdateDoca/{id}', [DocaController::class, 'indexUpdateDoca'])->name('indexUpdateDoca');

Route::put('/updateDoca/{id}', [DocaController::class,'update'])->name('updateDoca');

Route::delete('/destroyDoca/{id}', [DocaController::class,'destroy'])->name('destroyDoca');

// FIM ADMIN DOCA

// ADMIN BICICLETA

Route::get('/admin/dashboard/bicicleta', [BicletaController::class, 'index'])->name('bicicleta');

Route::post('/createBicicleta', [BicletaController::class,'create'])->name('admin.createBicicleta');

// FIM ADMIN BICICLETA

// ADMIN ALUGUEL

Route::get('/admin/dashboard/aluguel', [AluguelController::class, 'index'])->name('aluguel');

// FIM ADMIN ALUGUEL

// ADMIN USER

Route::get('/admin/dashboard/user', [UserController::class, 'index'])->name('user');

Route::delete('/destroyUser/{id}', [UserController::class,'destroy'])->name('destroyUser');

// FIM ADMIN USER

Route::get('/cliente/home', [ClienteController::class, 'index'])->name('cliente.home');

Route::get('/mapas', [EstacaoController::class, 'mapa'])->name('mapa');
