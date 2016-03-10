<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/
 Route::get('/', function () {
    return view('welcome');
});


/*
Route::get('/', function () {
	$grados = App\Grado::all();

    return View::make('institucion')->with('grados', $grados);
});
*/
Route::group(['prefix' => 'config'], function () {
	
	Route::resource('instituciones', 'InstitucionesController');
	Route::get('instituciones/{id}/destroy', [
		'uses' => 'InstitucionesController@destroy',
		'as'   => 'config.instituciones.destroy'
		]);
});


//Rutas para alumnos
/*Route::group(['prefix' => 'registro'], function () {
	
	Route::resource('alumnos', 'AlumnosController');
});*/

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/

Route::group(['middleware' => ['web']], function () {
    //


});
