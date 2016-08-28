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
        'schools' => App\Escuela::all(),
        'areas' => App\AreaEstrategica::all()
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

Route::get('/proyecto', 'ProyectoController@index');
Route::get('/proyecto/create', 'ProyectoController@create');
Route::post('/proyecto', 'ProyectoController@store');
Route::get('/proyecto/{proyecto}', 'ProyectoController@show');
Route::get('/proyecto/{proyecto}/edit', 'ProyectoController@edit');
Route::put('/proyecto/{proyecto}', 'ProyectoController@update');
Route::delete('/proyecto/{proyecto}', 'ProyectoController@destroy');

Route::get('/areaEstrategica', 'AreaEstrategicaController@index');
Route::get('/areaEstrategica/create', 'AreaEstrategicaController@create');
Route::post('/areaEstrategica', 'AreaEstrategicaController@store');
Route::get('/areaEstrategica/{areaEstrategica}', 'AreaEstrategicaController@show');
Route::get('/areaEstrategica/{areaEstrategica}/edit', 'AreaEstrategicaController@edit');
Route::put('/areaEstrategica/{areaEstrategica}', 'AreaEstrategicaController@update');
Route::delete('/areaEstrategica/{areaEstrategica}', 'AreaEstrategicaController@destroy');

Route::get('/escuela', 'EscuelaController@index');
Route::get('/escuela/create', 'EscuelaController@create');
Route::post('/escuela', 'EscuelaController@store');
Route::get('/escuela/{escuela}', 'EscuelaController@show');
Route::get('/escuela/{escuela}/edit', 'EscuelaController@edit');
Route::put('/escuela/{escuela}', 'EscuelaController@update');
Route::delete('/escuela/{escuela}', 'EscuelaController@destroy');

Route::get('/grupoinvestigacion/all', 'GrupoInvestigacionController@viewAll');
Route::get('/grupoinvestigacion', 'GrupoInvestigacionController@index');
Route::get('/grupoinvestigacion/create', 'GrupoInvestigacionController@create');
Route::post('/grupoinvestigacion', 'GrupoInvestigacionController@store');
Route::get('/grupoinvestigacion/{grupoInvestigacion}', 'GrupoInvestigacionController@show');
Route::get('/grupoinvestigacion/area/{grupoInvestigacion}', 'GrupoInvestigacionController@grupoArea');
Route::get('/grupoinvestigacion/escuela/{grupoInvestigacion}', 'GrupoInvestigacionController@grupoEscuela');
Route::get('/grupoinvestigacion/{grupoInvestigacion}/edit', 'GrupoInvestigacionController@edit');
Route::put('/grupoinvestigacion/{grupoInvestigacion}', 'GrupoInvestigacionController@update');
Route::delete('/grupoinvestigacion/{grupoInvestigacion}', 'GrupoInvestigacionController@destroy');


Route::get('/lineainvestigacion', 'LineaInvestigacionController@index');
Route::get('/lineainvestigacion/create', 'LineaInvestigacionController@create');
Route::post('/lineainvestigacion', 'LineaInvestigacionController@store');
Route::get('/lineainvestigacion/{lineaInvestigacion}', 'LineaInvestigacionController@show');
Route::get('/lineainvestigacion/{lineaInvestigacion}/edit', 'LineaInvestigacionController@edit');
Route::put('/lineainvestigacion/{lineaInvestigacion}', 'LineaInvestigacionController@update');
Route::delete('/lineainvestigacion/{lineaInvestigacion}', 'LineaInvestigacionController@destroy');

Route::get('/user', 'UserController@index');
Route::get('/user/create', 'UserController@create');
Route::post('/user', 'UserController@store');
Route::get('/user/{user}', 'UserController@show');
Route::get('/user/{user}/edit', 'UserController@edit');
Route::put('/user/{user}', 'UserController@update');
Route::delete('/user/{user}', 'UserController@destroy');