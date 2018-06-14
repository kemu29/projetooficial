<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CadFuncionarioController extends Controller
{
    public function cadfun(){

        return view ('CadFuncionario');
}
}