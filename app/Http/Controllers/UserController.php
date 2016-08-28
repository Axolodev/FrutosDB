<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;
use App\Http\Requests;

class UserController extends Controller {
    public function index(){
		$user = User::all();
        return \Response::json($user);
    }

    public function create(){
        
    }

    public function store(){

    }

    public function show(User $user){
        return view('user', $user);
    }

    public function edit(User $user){
        
    }
    
    public function update(User $user){
        
    }

    public function destroy(User $user){
        
        $user->delete();
        $response = [
            'status' => 'success'
        ];
        return \Response::json($response);
    }
}
