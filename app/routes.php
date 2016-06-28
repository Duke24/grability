<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/',array("uses"=>'HomeController@index',"as"=>'/'));
//Route::get('matriz',array("uses"=>'CubeController@index',"as"=>'matriz'));
Route::match(array('GET', 'POST'),'crearM',array("uses"=>'CubeController@createM',"as"=>'crear'));