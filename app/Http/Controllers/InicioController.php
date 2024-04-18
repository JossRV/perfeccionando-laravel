<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InicioController extends Controller
{
    public function index()
    {
        return view('modules.inicio');
    }
    public function secundario()
    {
        return view('modules.secundario');
    }
}
