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

$app->get('/', function () use ($app) {
    return $app->version();
});

$app->get('/users', 'UsersController@all');
/*
$app->post('/users', function () {
});
$app->get('/users/{id}', function () {
});
$app->put('/users/{id}', function () {
});
$app->delete('/users/{id}', function () {
});
*/