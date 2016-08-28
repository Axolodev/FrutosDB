<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Proyecto;
use App\Http\Requests;

class ProyectoController extends Controller{
	public function index(){
		$proyectos = Proyecto::all();
        return \Response::json($proyectos);
    }

    public function create(){
        
    }

    public function store(){

    }

    public function show(Proyecto $proyecto){
        $profesor = $proyecto->profesor_lider;
        $linea = $proyecto->linea_investigacion;
        return view('descripcion', array("proyecto" => $proyecto, "profesor_lider" => $profesor, "linea" => $linea));
    }

    public function edit(Proyecto $proyecto){
        
    }
    
    public function update(Proyecto $proyecto){
        
    }

    public function destroy(Proyecto $proyecto){
        
        $proyecto->delete();
        $response = [
            'status' => 'success'
        ];
        return \Response::json($response);
    }
}
