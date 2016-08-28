<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\GrupoInvestigacion;
use App\AreaEstrategica;
use App\LineaInvestigacion;
use App\Escuela;
use App\Http\Requests;

class GrupoInvestigacionController extends Controller
{
    public function viewAll(){
        $grupos = GrupoInvestigacion::all();
        return view('grupos', array("grupos" => $grupos));
    }
    
    public function index(){
		$grupoInvestigacion = GrupoInvestigacion::all();
        return \Response::json($grupoInvestigacion);
    }

    public function create(){
        
    }

    public function store(){

    }

    public function show(GrupoInvestigacion $grupoInvestigacion){
        $lineas = LineaInvestigacion::where('id_grupo_investigacion', '=', $grupoInvestigacion["id"])->get();
        return view('descripcion-grupos', array("grupo" => $grupoInvestigacion, "lineas" => $lineas));
    }

    public function edit(GrupoInvestigacion $grupoInvestigacion){
        
    }
    
    public function grupoEscuela($escuela){
        $grupos = GrupoInvestigacion::where('id_escuela', "=", $escuela)->get();
        return view ('grupos', array("grupos" => $grupos));
    }
    
    public function grupoArea($area){
        $grupos = GrupoInvestigacion::where('id_area_estrategica', "=", $area)->get();
        return view ('grupos', array("grupos" => $grupos));
    }    
    
    public function update(GrupoInvestigacion $grupoInvestigacion){
        
    }

    public function destroy(GrupoInvestigacion $grupoInvestigacion){
        
        $grupoInvestigacion->delete();
        $response = [
            'status' => 'success'
        ];
        return \Response::json($response);
    }
}
