<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\AreaEstrategica;
use App\Http\Requests;

class AreaEstrategicaController extends Controller {
    public function index(){
		$areaEstrategica = AreaEstrategica::all();
        return \Response::json($areaEstrategica);
    }

    public function create(){
        
    }

    public function store(){

    }

    public function show(AreaEstrategica $areaEstrategica){
        return view('areaEstrategica', $areaEstrategica);
    }

    public function edit(AreaEstrategica $areaEstrategica){
        
    }
    
    public function update(AreaEstrategica $areaEstrategica){
        
    }

    public function destroy(AreaEstrategica $areaEstrategica){
        
        $areaEstrategica->delete();
        $response = [
            'status' => 'success'
        ];
        return \Response::json($response);
    }
}
