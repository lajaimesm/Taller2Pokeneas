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

$router->get('/', function () use ($router) {
    return $router->app->version();
});

$router->get('/pokeneas', [
    'as' => 'getRandomPokenea', 'uses' => 'PokeneaController@getRandomPokenea'
]);

$router->get('/pokeneas/image', [
    'as' => 'getRandomPokeneaImage', 'uses' => 'PokeneaController@getRandomPokeneaImage'
]);
/*
// API routes
$router->group(['prefix' => '/api/v1'], function () use ($router) {
    $router->get('/pokeneas', [
        'as' => 'findAll', 'uses' => 'Api\PokeneaApiV1@findAll'
    ]);

    $router->get('/pokeneas/basic/random', [
        'as' => 'getRandom', 'uses' => 'Api\PokeneaApiV1@getRandomWithBasicData'
    ]);

    $router->get('/pokeneas/image/random', [
        'as' => 'getRandomWithView', 'uses' => 'Api\PokeneaApiV1@getRandomWithImage'
    ]);
});
*/
// Web Routes

