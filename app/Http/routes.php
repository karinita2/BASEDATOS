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



/*
Route::get('/', function () {
	$grados = App\Grado::all();

    return View::make('institucion')->with('grados', $grados);
});

Route::group(['prefix' => 'config'], function () {
	
	Route::resource('instituciones', 'InstitucionesController');
	Route::get('instituciones/{id}/destroy', [
		'uses' => 'InstitucionesController@destroy',
		'as'   => 'config.instituciones.destroy'
		]);
});

*/
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
/*
Route::group(['middleware' => ['web']], function () {
    //


});
*/


Route::group(['middleware' => 'web'], function () {
    //
	Route::auth();
	Route::get('/', function () {
    	return view('welcome');
	});
	/*
	Route::get('foo', function () {
	    return 'Hello World';
	});*/

	Route::get('public/foo', ['as' => 'foo', function () {
	   return view('welcome');
	}]);
 	
Route::resource('excel','ExcelController');


	
	Route::group(['prefix' => 'config'], function () {
		
		Route::resource('instituciones', 'InstitucionesController');
		
		Route::get('instituciones/{id}/destroy', [
			'uses' => 'InstitucionesController@destroy',
			'as'   => 'config.instituciones.destroy'
			]);
	
		Route::get('/instituciones/{id}/getMunicipios', [
			'uses' => 'InstitucionesController@getMunicipios',
			'as'   => 'config.instituciones.getMunicipios'
			]);

		Route::get('/instituciones/{id}/getParroquias', [
			'uses' => 'InstitucionesController@getParroquias',
			'as'   => 'config.instituciones.getParroquias'
			]);


	});
	
	Route::group(['prefix' => 'config'], function () {
		
		Route::resource('permisos', 'PermisosController');
		Route::get('permisos/{id}/destroy', [
			'uses' => 'PermisosController@destroy',
			'as'   => 'config.permisos.destroy'
			]);
	});


	Route::group(['prefix' => 'config'], function () {
		
		Route::resource('instituciones_conf', 'InstitucionesConfController');
		Route::get('instituciones_conf/{id}/destroy', [
			'uses' => 'InstitucionesConfController@destroy',
			'as'   => 'config.instituciones_conf.destroy'
			]);
	});


	Route::group(['prefix' => 'config'], function () {
		
		Route::resource('grados', 'GradosController');
		Route::get('grados/{id}/destroy', [
			'uses' => 'GradosController@destroy',
			'as'   => 'config.grados.destroy'
			]);
	});

	Route::group(['prefix' => 'config'], function () {
		
		Route::resource('secciones', 'SeccionesController');
		Route::get('secciones/{id}/destroy', [
			'uses' => 'SeccionesController@destroy',
			'as'   => 'config.secciones.destroy'
			]);
	});

	Route::group(['prefix' => 'config'], function () {
		
		Route::resource('materias', 'MateriasController');
		Route::get('materias/{id}/destroy', [
			'uses' => 'MateriasController@destroy',
			'as'   => 'config.materias.destroy'
			]);
	});


	Route::group(['prefix' => 'config'], function () {
		
		Route::resource('materia_configs', 'MateriaConfigsController');
		Route::get('materia_configs/{id}/destroy', [
			'uses' => 'MateriaConfigsController@destroy',
			'as'   => 'config.materia_configs.destroy'
			]);
	});



	Route::group(['prefix' => 'config'], function () {
		
		Route::resource('rutas', 'RutasController');
		Route::get('rutas/{id}/destroy', [
			'uses' => 'RutasController@destroy',
			'as'   => 'config.rutas.destroy'
			]);
		Route::get('rutas/{id}/createwithparam', [
			'uses' => 'RutasController@createwithparam',
			'as'   => 'config.rutas.createwithparam'
			]);
	});

	Route::group(['prefix' => 'config'], function () {
		
		Route::resource('actividades', 'ActividadesController');
		Route::get('actividades/{id}/destroy', [
			'uses' => 'ActividadesController@destroy',
			'as'   => 'config.actividades.destroy'
			]);
	});

	Route::group(['prefix' => 'config'], function () {
		
		Route::resource('c_medicas', 'CMedicasController');
		Route::get('c_medicas/{id}/destroy', [
			'uses' => 'CMedicasController@destroy',
			'as'   => 'config.c_medicas.destroy'
			]);
	});

	Route::group(['prefix' => 'config'], function () {
		
		Route::resource('tallas', 'TallasController');
		Route::get('tallas/{id}/destroy', [
			'uses' => 'TallasController@destroy',
			'as'   => 'config.tallas.destroy'
			]);
	});

	Route::group(['prefix' => 'config'], function () {
		
		Route::resource('nivel_estudios', 'NivelEstudiosController');
		Route::get('nivel_estudios/{id}/destroy', [
			'uses' => 'NivelEstudiosController@destroy',
			'as'   => 'config.nivel_estudios.destroy'
			]);
	});

	Route::group(['prefix' => 'config'], function () {
		
		Route::resource('filiales', 'FilialesController');
		Route::get('filiales/{id}/destroy', [
			'uses' => 'FilialesController@destroy',
			'as'   => 'config.filiales.destroy'
			]);
	});

	Route::group(['prefix' => 'config'], function () {
		
		Route::resource('nominas', 'NominasController');
		Route::get('nominas/{id}/destroy', [
			'uses' => 'NominasController@destroy',
			'as'   => 'config.nominas.destroy'
			]);
	});

	
	Route::group(['prefix' => 'registro'], function () {
		
		Route::resource('docentes', 'DocentesController');
		
		Route::get('docentes/{id}/destroy', [
			'uses' => 'DocentesController@destroy',
			'as'   => 'registro.docentes.destroy'
			]);
	
		Route::get('/docentes/{id}/getEdad', [
			'uses' => 'DocentesController@getEdad',
			'as'   => 'registro.docentes.getEdad'
			]);

		Route::get('/docentes/{id}/getVerificaCedulaDocente', [
			'uses' => 'DocentesController@getVerificaCedulaDocente',
			'as'   => 'registro.docentes.getVerificaCedulaDocente'
			]);
		
		Route::get('/docentes/{id}/getTrabajadorJSON', [
			'uses' => 'DocentesController@getTrabajadorJSON',
			'as'   => 'registro.docentes.getTrabajadorJSON'
			]);

		Route::get('/docentes/{id}/getUsuarioJSON', [
			'uses' => 'DocentesController@getUsuarioJSON',
			'as'   => 'registro.docentes.getUsuarioJSON'
			]);
		//para obtener las materias asociadas a un docente
		Route::get('/docentes/{id}/getMateriasDocente', [
			'uses' => 'DocentesController@getMateriasDocente',
			'as'   => 'registro.docentes.getMateriasDocente'
			]);




	});








});