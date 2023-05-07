<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', function() {
    return view('home');
})->name('home')->middleware('auth');

Route::get('/settings', function () {
    return view('settings');
})->middleware(['password.confirm']);


//Rutas para Usuarios Sidebar
Route::get('/admin/usuarios/registrousu', function () {
    return view('admin.usuarios.registroUsu');
});

Route::get('/admin/usuarios/listausu', function () {
    return view('admin.usuarios.listaUsu');
});


//Rutas para Inventario Sidebar
Route::get('/admin/inventario/registroinv', function () {
    return view('admin.inventario.registroInv');
});

Route::get('/admin/inventario/listainv', function () {
    return view('admin.inventario.listaInv');
});

Route::get('/admin/inventario/registrocat', function () {
    return view('admin.inventario.registroCat');
});

Route::get('/admin/inventario/listacat', function () {
    return view('admin.inventario.listaCat');
});


//Rutas para Respaldos Sidebar

Route::get('/admin/respaldos/respaldo', function () {
    return view('admin.respaldos.respaldo');
});

Route::get('/admin/respaldos/restauracion', function () {
    return view('admin.respaldos.restauracion');
});


//Ruta para Reportes Sidebar

Route::get('/admin/reportes/listarepo', function () {
    return view('admin.reportes.listaRepo');
});


//Rutas para Sistema Sidebar

Route::get('/admin/sistema/gestioncuenta', function () {
    return view('admin.sistema.gestionCuenta');
});

Route::get('/admin/sistema/gestionsicim', function () {
    return view('admin.sistema.gestionSicim');
});
