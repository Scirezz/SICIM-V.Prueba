<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

// En este controlador se va a realizar la logica para la utenticacion de cada ruta con los roles
use App\Http\Controllers\Admin\HomeController;


//En este conjunto de rutas van a ir los accesos a el apartado de administrador


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
