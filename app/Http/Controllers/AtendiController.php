<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AtendiController extends Controller
{
    public function atendimento_on(){

        return view ('Atendimento');
}
}
