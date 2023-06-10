<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PacienteController;
use App\Http\Controllers\UsuarioController;

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
Route::view('/','MedHostPublic.home');

Route::get('/layoutheader', function () {
    return view('layoutsmedhost.header'); 
});

Route::get('/layoutfooter', function () {
    return view('layoutsmedhost.footer'); 
});

Route::get('/layoutloader', function () {
    return view('layoutsmedhost.loader'); 
});


Route::view('/medhost_home', 'MedHostPublic.home')->name('Home_MedHost');
Route::view('/medhost_contactanos', 'MedHostPublic.contactanos')->name('Contact_MedHost');
Route::view('/medhost_servicios', 'MedHostPublic.servicios')->name('Servicios_MedHost');
Route::view('/medhost_overview','MedHostPublic.overview')->name('Team_MedHost');
Route::view('/medhost_about_our_team','MedHostPublic.about_our_team')->name('OurTeam_MedHost');
Route::view('/medhost_especialidades','MedHostPublic.especialidades')->name('Especialidades_MedHost');


Route::view('/Login_Sign_User', 'Sistema.log_sign' )->name('Login_Sign_User');


Route::get('/pacientes', [PacienteController::class,'index'])->middleware('web');

// Route::get('/usuarios', [UsuarioController::class,'index'])->middleware('web');
Route::get('/usuarios', [UsuarioController::class, 'index'])->name('usuarios.index')->middleware('web');

Route::post('/usuarios', [UsuarioController::class, 'store'])->name('usuarios.store');
Route::get('/usuarios/{id}/editar', [UsuarioController::class, 'edit'])->name('usuarios.edit');
Route::get('/usuarios/{id}/edit2', [UsuarioController::class, 'edit2'])->name('usuarios.edit2');
Route::put('/usuarios/{id}', [UsuarioController::class, 'update'])->name('usuarios.update');


Route::delete('/usuarios/{id}', [UsuarioController::class, 'destroy'])->name('usuarios.destroy');

Route::view('/nuevo_usuario','usuarios.create');


Route::view('/sistema','Medicos.index');