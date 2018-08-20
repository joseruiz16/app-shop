<?php

 /*tenemos una ruta de tipo get escrito sobra la ruta raiz y hace es ejecutar la funcion
 que esta devolviendo una vista llamada welcom esa vista welcome se encuentra definida en 
 dentro de la carpeta resource view  y 
 podemos devolver diferentes tipos de respuesta  ante una ruta determinada y ejecuatar acciones distintas

 Route::get('/', function () {
    return view('welcome');
});
  */

/*
// muestra el hola cuando escribe asi http://localhost/app-shop/public/prueba 
Route::get('/prueba', function(){
	return ' hola';
});
*/

/*

 ya la ruta no es  resuelta por una funcion anonima si no un controlador llamado TestController especificamente  a traves del metodo welcome esta ruta se esta asociadno con el controllador textcontroler a traves del metodo welcome y este asu vez esta devolviendo la vista welcom
 */
Route::get('/', 'TestController@welcome');




Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
