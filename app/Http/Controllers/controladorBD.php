<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\validadorDiario;
//Manejo de base de datos
use DB;
//Manejo de las fechas
use Carbon\Carbon;

class controladorBD extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ConsultaRec = DB::table('tb_recuerdos') ->get();
        return view("Recuerdo",compact('ConsultaRec'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('Registrar');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(validadorDiario $request)
    {
        DB::table('tb_recuerdos') -> insert([
            "titulo"=>$request->input('txtTitulo'),
            "recuerdo"=>$request->input('txtRecuerdo'),
            "fecha"=>Carbon::now(),
            "created_at"=>Carbon::now(),
            "updated_at"=>Carbon::now(), 
        ]);

        return redirect('recuerdo/create')->with('confirmacion,confirmacion');
    }

   

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $consultaID= DB::table('tb_recuerdos')->where('idRecuerdo',$id) ->first();
        return view('editar',compact('consultaID'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(validadorDiario $request, $id)
    {
        DB::table('tb_recuerdos') ->where('idRecuerdo',$id)-> update ([
            "titulo"=>$request->input('txtTitulo'),
            "recuerdo"=>$request->input('txtRecuerdo'),
            "updated_at"=>Carbon::now(), 
        ]);

        return redirect('Recuerdo')->with('actualizar','abc');
    }

    public function show($id)
    {
        $consultaID = DB::table('tb_recuerdos')->where('idRecuerdo',$id)->first();
        return view('eliminar',compact('consultaID'));
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::table('tb_recuerdos') ->where('idRecuerdo',$id)->delete();

        return redirect('Recuerdo')->with('eliminado','Eliminado');
    }
}
