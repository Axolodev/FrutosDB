<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Profesor;
use App\Http\Requests;

class ProfesorController extends Controller {
    public function index(){
        $profesores = Profesor::all();
        return \Response::json($profesores);
    }
    
    public function create(){
        
    }
    
    public function store(){
        //$profesor = 
        //$profesor->save();
    }
    
    public function show(Profesor $profesor){
        return view('profesor', $profesor);
    }
    
    public function edit(Profesor $profesor){
        
    }
    
    public function update(Profesor $profesor){
        
    }
    
    public function destroy(Profesor $profesor){
        
        $profesor->delete();
        $response = [
            'status' => 'success'
        ];
        return \Response::json($response);
    }
}
