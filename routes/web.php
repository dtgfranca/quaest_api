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

$router->group(['prefix' =>"/api"], function() use ($router) {
    $router->get('/category', 'CategoryController@getAll');
    $router->get('/profile/{id}', 'ProfileController@getAll');
    $router->get('/facebook/{id}/{mes}','FacebookController@getAll');
    $router->get('/twiiter/{id}/{mes}','TwitterController@getAll');
    $router->get('/instagram/{id}/{mes}','InstagramController@getAll');
});

