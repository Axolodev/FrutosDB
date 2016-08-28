<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Escuela
use App\Http\Requests;

class EscuelaController extends Controller {
    public function index(){
        $escuela = Escuela::all();
        return \Response::json($escuela);
    }
    
    public function create(){
        
    }
    
    public function store(){

    }
    
    public function show(Escuela $escuela){
        return view('escuela', $escuela);
    }
    
    public function edit(Escuela $escuela){
        
    }
    
    public function update(Escuela $escuela){
        
    }
    
    public function destroy(Escuela $escuela){
        
        $escuela->delete();
        $response = [
            'status' => 'success'
        ];
        return \Response::json($escuela);
    }
}
