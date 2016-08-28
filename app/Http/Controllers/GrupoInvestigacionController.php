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

    public function show(GrupoInvestigacion $grupoInvestigacion){
        return view('grupoInvestigacion', $grupoInvestigacion);
    }

    public function edit(GrupoInvestigacion $grupoInvestigacion){
        
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
