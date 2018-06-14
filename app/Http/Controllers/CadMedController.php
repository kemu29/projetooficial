<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CadMedController extends Controller
{
    public function cadmedicamento(){

        return view ('CadMedicamento');
}

}