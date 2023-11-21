<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestRequest extends Controller
{
    //

    public function GetSaludo()
    {
        return response()->json(['mensaje' => '¡Hola desde Laravel!']);
    }
}
