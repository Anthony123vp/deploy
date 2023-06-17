<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PacienteController;
use App\Http\Controllers\HorarioController;
use App\Http\Controllers\UsuarioController;
use App\Http\Controllers\RecepcionistaController;
use App\Http\Controllers\AdministradorController;
use App\Http\Controllers\MedicoController;
use App\Http\Controllers\RolController;
use App\Http\Controllers\SistemaController;

use App\Http\Controllers\ReservaController;
use App\Http\Controllers\ReservaPendiente;
use App\Http\Controllers\ReservaProgramada;


use App\Http\Controllers\AuthenthicatedSessionController;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

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

// Route::view('/Login_Sign_User', 'Sistema.log_sign' )->name('Login_Sign_User');
Route::get('/log_sign', [SistemaController::class,'index'])->name('login')->middleware('web');

/*AUTENTICACION DE USUARIO */
// Route::view('/Login_Sign_User', 'Sistema.log_sign' )->name('login');
Route::post('/LoginUser',[AuthenthicatedSessionController::class,'store'])->name('Login.store');
Route::post('/Logout',[AuthenthicatedSessionController::class,'destroy'])->name('Logout');
Route::view('/Dashboard','Sistema.dashboard')-> name('Dashboard');


Route::get('/pacientes', [PacienteController::class,'index'])->name('pacientes.index')->middleware('web');
Route::get('/pacientes/create',[PacienteController::class,'create'])->name('pacientes.create');


Route::post('/Sistema', [PacienteController::class, 'store'])->name('pacientes.store');
Route::get('/pacientes/create',[PacienteController::class,'create'])->name('pacientes.create');
Route::get('/pacientes/{id}/editar', [PacienteController::class, 'edit'])->name('pacientes.edit');
Route::put('/pacientes/{id}', [PacienteController::class, 'update'])->name('pacientes.update');
Route::delete('/pacientes/{id}', [PacienteController::class, 'destroy'])->name('pacientes.destroy');


// Route::view('/medicos','Medicos.index')->name('indexmedicos');
// Route::view('/recepcionista','Recepcionista.index');

Route::get('/horarios',[HorarioController::class,'index'])->name('Horario.index');
Route::get('/horarios/create',[HorarioController::class,'create'])->name('Horario.create');
Route::post('/horarios',[HorarioController::class,'store'])->name('Horario.store');
// Route::get('/usuarios', [UsuarioController::class,'index'])->middleware('web');

Route::get('/usuarios', [UsuarioController::class, 'index'])->name('usuarios.index')->middleware('web');
Route::get('/usuarios/create',[UsuarioController::class,'create'])->name('usuarios.create');
Route::post('/usuarios', [UsuarioController::class, 'store'])->name('usuarios.store');
Route::get('/usuarios/{id}/editar', [UsuarioController::class, 'edit'])->name('usuarios.edit');
Route::get('/usuarios/{id}/edit2', [UsuarioController::class, 'edit2'])->name('usuarios.edit2');
Route::put('/usuarios/{id}', [UsuarioController::class, 'update'])->name('usuarios.update');

Route::put('/usuarios/{id}/activate', [UsuarioController::class, 'activate'])->name('usuarios.activate');

Route::delete('/usuarios/{id}', [UsuarioController::class, 'destroy'])->name('usuarios.destroy');

Route::get('/recepcionistas', [RecepcionistaController::class, 'index'])->name('recepcionistas.index')->middleware('web');
Route::get('/recepcionistas/create',[RecepcionistaController::class,'create'])->name('recepcionistas.create');
Route::post('/recepcionistas', [RecepcionistaController::class, 'store'])->name('recepcionistas.store');
Route::match(['get', 'put'], '/recepcionistas/{id}/editar', [RecepcionistaController::class, 'edit'])->name('recepcionistas.edit');
Route::get('/recepcionistas/{id}/edit2', [RecepcionistaController::class, 'edit2'])->name('recepcionistas.edit2');
Route::put('/recepcionistas/{id}', [RecepcionistaController::class, 'update'])->name('recepcionistas.update');
Route::delete('/recepcionistas/{id}', [RecepcionistaController::class, 'destroy'])->name('recepcionistas.destroy');


Route::get('/medicos', [MedicoController::class, 'index'])->name('medicos.index')->middleware('web');
Route::get('/medicos/create',[MedicoController::class,'create'])->name('medicos.create');
Route::post('/medicos', [MedicoController::class, 'store'])->name('medicos.store');
Route::match(['get', 'put'], '/medicos/{id}/editar', [MedicoController::class, 'edit'])->name('medicos.edit');
Route::put('/medicos/{id}', [MedicoController::class, 'update'])->name('medicos.update');
Route::delete('/medicos/{id}', [MedicoController::class, 'destroy'])->name('medicos.destroy');


Route::get('/roles', [RolController::class, 'index'])->name('roles.index')->middleware('web');



Route::get('/administradores', [AdministradorController::class, 'index'])->name('administradores.index')->middleware('web');
Route::get('/administradores/create',[AdministradorController::class,'create'])->name('administradores.create');
Route::post('/administradores', [AdministradorController::class, 'store'])->name('administradores.store');
Route::match(['get', 'put'], '/administradores/{id}/editar', [AdministradorController::class, 'edit'])->name('administradores.edit');
Route::put('/administradores/{id}', [AdministradorController::class, 'update'])->name('administradores.update');
Route::delete('/administradores/{id}', [AdministradorController::class, 'destroy'])->name('administradores.destroy');


// Route::view('/nuevo_usuario','usuarios.create');

// Route::view('/pacientes','pacientes.table');




/*Vista de boton para la rececpcionista*/
    /*Crud de Reservas*/
    Route::get('/reservas',[ReservaController::class,'index'])->name('reservas.index');
    Route::get('/reservas/create',[ReservaController::class,'create'])->name('reservas.create');
    Route::post('/reservas',[ReservaController::class,'store'])->name('reservas.store');


//Vista de botones para el paciente:
Route::get('/citas_pendientes',[ReservaPendiente::class,'index'])->name('citas_pendiente.index');
Route::view('/historial','Paciente_botones\historial\index')->name('historial.index');


//Vista de botones para el medico
    /*Visualizacion de citas para atender */
    Route::get('/citas_programadas',[ReservaProgramada::class,'index'])->name('citas_programadas.index');

    /*Creacion de Horarios */

    Route::get('/horarios',[HorarioController::class,'index'])->name('Horario.index');
    Route::get('/horarios/create',[HorarioController::class,'create'])->name('Horario.create');
    Route::post('/horarios',[HorarioController::class,'store'])->name('Horario.store');





