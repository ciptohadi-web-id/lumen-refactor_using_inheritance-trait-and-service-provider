<?php

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

$router->get('/', function () use ($router) {
    return $router->app->version();
});



$router->get('/account/profile/{id}', 'UserController@show');

$router->get('/admin/users/{id}', 'UserController@show');

// create seperate controller
$router->get('/admin/users/{id}', 'UserController@show');

$router->get('/account/profile/{id}', 'AccountController@show');

