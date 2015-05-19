<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
| post,get,put,delete
*/

Route::get('controlador','PruebaController@index');
Route::get('name/{nombre}','PruebaController@nombre');


Route::resource('movie','MovieController');


/*
| Ruta Basica
*/
Route::get('prueba', function(){
	return "Hola desde routes.php";
});

/*
| Ruta Basica Con parametro
*/
/*
| Estructura
| Route:: -> Referencia a clase
| get -> Metodo HTTP
| 'nombre' -> Nombre de la URL en el navegador
| '{nombre}' -> parametro que recibiremos mediante la ruta
| function($nombre) -> funcion recibiendo el parametro
*/
Route::get('nombre/{nombre}', function($nombre){
	return "Mi nombre es: ".$nombre;
});

Route::get('edad/{edad}', function($edad){
	return "Mi edad es: ".$edad;
});

/*
| Ruta Basica Con parametro opcional
*/
Route::get('edad2/{edad?}', function($edad = 20){
	return "Mi edad es: ".$edad;
});


Route::get('/', 'WelcomeController@index');

Route::get('home', 'HomeController@index');

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);
