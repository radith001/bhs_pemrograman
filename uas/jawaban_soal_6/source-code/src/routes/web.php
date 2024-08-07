<?php

/** @var \Laravel\Lumen\Routing\Router $router */

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/
$router->group(['prefix' => 'api/v1/testing', 'middleware'=>'auth'], function() use ($router){
    $router->get('/', ['uses' => 'UserController@index']);
});

$router->get('/', function () use ($router) {
    return $router->app->version();
});

$router->group(['prefix' => 'api/v1/testing'], function() use ($router){
    $router->get('/', ['uses' => 'UserController@index']);
	$router->post('/', ['uses' => 'UserController@create ']);
	$router->get('/{id}', ['uses' => 'UserController@show']);
	$router->delete('/{id}', ['uses' => 'UserController@destroy']);
	$router->put('/{id}', ['uses' => 'UserController@update']);
});

$router->group(['prefix' => 'api/v1/logistik', 'middleware'=>'auth'], function() use ($router){
    $router->get('/', ['uses' => 'LogistikController@index']);
	$router->post('/', ['uses' => 'LogistikController@store']);
	$router->get('/{id}', ['uses' => 'LogistikController@show']);
	$router->delete('/{id}', ['uses' => 'LogistikController@destroy']);
	$router->put('/{id}', ['uses' => 'LogistikController@update']);
});


