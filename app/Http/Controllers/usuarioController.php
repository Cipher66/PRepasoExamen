<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class usuarioController extends Controller
{
    //
    public function __construct(){
        $this->middleware('permiso');
    }
    public function acceso(){
        return view('permitido');
    }
}
