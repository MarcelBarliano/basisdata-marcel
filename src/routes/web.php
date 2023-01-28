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

$router->group(['prefix' => 'api'], function () use ($router) {

    // Buku
    $router->get('/dosen', ['uses' => 'DosenController@index']);
    $router->post("/dosen", ["uses" => "DosenController@create"]);
    $router->put("/dosen/{id}", ["uses" => "DosenController@update"]);
    $router->get("/dosen/{id}", ["uses" => "DosenController@show"]);
    $router->delete("/dosen/{id}", ["uses" => "DosenController@destroy"]);

    // peminjaman
    $router->get('/mahasiswa', ['uses' => 'MahasiswaController@index']);
    $router->post("/mahasiswa", ["uses" => "MahasiswaController@create"]);
    $router->put("/mahasiswa/{id}", ["uses" => "MahasiswaController@update"]);
    $router->get("/mahasiswa/{id}", ["uses" => "MahasiswaController@show"]);
    $router->delete("/mahasiswa/{id}", ["uses" => "MahasiswaController@destroy"]);

});