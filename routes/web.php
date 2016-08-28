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
    return view('index', array(
        'teachers' => App\Profesor::all(),
    ));
});

Route::get('profesores', function () {
	return view('profesor');
});

Route::get('proyectos', function () {
	$proyectos = array(array('titulo' => 'Robótica', 'resumen' => 'Robots'), array('titulo' => 'Genética', 'resumen' => 'Genes'));
	return view('proyectos', ["projects" => $proyectos]);
});


Route::get('/profesor', 'ProfesorController@index');
Route::get('/profesor/create', 'ProfesorController@create');
Route::post('/profesor', 'ProfesorController@store');
Route::get('/profesor/{profesor}', 'ProfesorController@show');
Route::get('/profesor/{profesor}/edit', 'ProfesorController@edit');
Route::put('/profesor/{profesor}', 'ProfesorController@update');
Route::delete('/profesor/{profesor}', 'ProfesorController@destroy');