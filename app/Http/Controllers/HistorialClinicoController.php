<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\HistorialClinico;
class HistorialClinicoController extends Controller
{
    public function index(){
        $citas=HistorialClinico::get();
        return  view('Paciente_botones\historial\index',['citas'=>$citas]);
    }
}
