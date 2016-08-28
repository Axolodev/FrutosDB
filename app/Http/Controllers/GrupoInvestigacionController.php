<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\GrupoInvestigacion
use App\Http\Requests;

class GrupoInvestigacionController extends Controller
{
    public function index(){
		$grupoInvestigacion = GrupoInvestigacion::all();
        return \Response::json($grupoInvestigacion);
    }

    public function create(){
        
    }

    public function store(){

    }

    public function show(GrupoInvestigacion $lineaInvestigacion){
        return view('lineaInvestigacion', $grupoInvestigacion);
    }

    public function edit(GrupoInvestigacion $lineaInvestigacion){
        
    }
    
    public function update(GrupoInvestigacion $lineaInvestigacion){
        
    }

    public function destroy(GrupoInvestigacion $lineaInvestigacion){
        
        $grupoInvestigacion->delete();
        $response = [
            'status' => 'success'
        ];
        return \Response::json($response);
    }
}
