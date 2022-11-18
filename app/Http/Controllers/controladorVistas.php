<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests\validadorDiario;

class controladorVistas extends Controller
{
    public function procesarRecuerdo(validadorDiario $req){
        //return 'Su recuerdo esta siendo procesado';
        //return $req -> all();        
        //return $req -> path();
        //return $req -> url();
        //return $req -> ip();

        //Redireccionar al mismo formulario con mensaje de que se hizo el registro
        return redirect('ingresar')->with('confirmación','Llegó correcto');
    }

    public function showWelcome(){
        return view("welcome");
    }

    public function showHome(){
        return view("Home");
    }

    public function showIngresar(){
        return view("Registrar");
    }

    public function showRecuerdos(){
        return view("Recuerdo");
    }
}
