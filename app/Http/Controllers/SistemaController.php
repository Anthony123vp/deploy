<?php

namespace App\Http\Controllers;

use App\Models\Insurance;
use Illuminate\Http\Request;

class SistemaController extends Controller
{
    public function index()
    {
        $insurances = Insurance::all();
        return view('Sistema.log_sign', compact('insurances'));
    }

}
