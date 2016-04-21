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

$app->get('/', 'CasinoController@index');

$app->get('/casino', 'CasinoController@index');

$app->get('/casino/add', 'CasinoController@add');

$app->post('/casino/save', 'CasinoController@save');

$app->get('/casino/edit/{id}', 'CasinoController@edit');

$app->get('/casino/delete/{id}', 'CasinoController@delete');

$app->get('/casino/find', 'CasinoController@find');

$app->get('/casino/find/{postcode}', 'CasinoController@find');