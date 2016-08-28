<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {
	$teachers = array(array('nombre' => 'Roberto'), array('nombre' => 'Tenorio'));
    return view('index', ["teachers" => $teachers]);
});

Route::get('profesores', function () {
	return view('profesor');
});

Route::get('proyectos', function () {
	$proyectos = array(array('titulo' => 'Robótica', 'resumen' => 'Robots'), array('titulo' => 'Genética', 'resumen' => 'Genes'));
	return view('proyectos', ["projects" => $proyectos]);
});
