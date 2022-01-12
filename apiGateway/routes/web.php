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

$router->group(['prefix' => 'api', 'middleware' => ['client.credentials']], function () use ($router) {

    $router->group(['prefix' => 'user'], function () use ($router) {
        $router->post('/register', ['uses' => 'AuthController@register']);
        $router->post('/login',  ['uses' => 'AuthController@login']);
        $router->delete('/delete',['uses' => 'UserController@delete']);
        $router->put('/update', ['uses' => 'UserController@update']);
    });

    $router->group(['prefix' => 'message'], function () use ($router) {
        $router->put('/update/{id}', ['uses' => 'MessageController@update']) ;

    });

    $router->group(['prefix' => 'discussion'], function () use ($router) {
        $router->post('/create', ['uses' => 'DiscusssionController@create']);
        $router->put('/addMessage/{idDiscussion}', ['uses' => 'DiscussionController@addMessage']);
        $router->get('/showCurrent/{idDiscussion}', ['uses'=>'DiscussionController@showCurrent']);
        $router->get('/showAllDiscussion', ["uses" => 'DiscussionController@showAll']);
        $router->delete('/delete/{id}', ["uses" => 'DiscussionController@delete']);
    });
});
