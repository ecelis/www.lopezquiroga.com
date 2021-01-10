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
  $router->get('usuarios', ['uses' => 'UsuarioController@showAllUsuarios']);
  $router->get('usuarios/{id}', ['uses' => 'UsuarioController@showOneUsuario']);
  $router->post('usuarios', ['uses' => 'UsuarioController@create']);
  $router->delete('usuarios/{id}', ['uses' => 'UsuarioController@delte']);
  $router->put('usuarios/{id}', ['uses' => 'UsuarioController@update']);

  $router->get('artistas', ['uses' => 'ArtistaController@showAllArtistas']);
  $router->get('artistas/{id}', ['uses' => 'ArtistaController@showOneArtista']);
  $router->post('artistas', ['uses' => 'ArtistaController@create']);
  $router->delete('artistas/{id}', ['uses' => 'ArtistaController@delte']);
  $router->put('artistas/{id}', ['uses' => 'ArtistaController@update']);

  $router->get('colecciones', ['uses' => 'ColeccionController@showAllColecciones']);
  $router->get('colecciones/{id}', ['uses' => 'ColeccionController@showOneColeccion']);
  $router->post('colecciones', ['uses' => 'ColeccionController@create']);
  $router->delete('colecciones/{id}', ['uses' => 'ColeccionController@delte']);
  $router->put('colecciones/{id}', ['uses' => 'ColeccionController@update']);

  $router->get('exhibiciones', ['uses' => 'ExhibicionController@showAllExhibiciones']);
  $router->get('exhibiciones/{id}', ['uses' => 'ExhibicionController@showOneExhibicion']);
  $router->post('exhibiciones', ['uses' => 'ExhibicionController@create']);
  $router->delete('exhibiciones/{id}', ['uses' => 'ExhibicionController@delte']);
  $router->put('exhibiciones/{id}', ['uses' => 'ExhibicionController@update']);

  $router->get('fotos', ['uses' => 'FotoController@showAllFotos']);
  $router->get('fotos/{id}', ['uses' => 'FotoController@showOneFoto']);
  $router->post('fotos', ['uses' => 'FotoController@create']);
  $router->delete('fotos/{id}', ['uses' => 'FotoController@delte']);
  $router->put('fotos/{id}', ['uses' => 'FotoController@update']);

  $router->get('publicaciones', ['uses' => 'PublicacionController@showAllPublicaciones']);
  $router->get('publicaciones/{id}', ['uses' => 'PublicacionController@showOnePublicacion']);
  $router->post('publicaciones', ['uses' => 'PublicacionController@create']);
  $router->delete('publicaciones/{id}', ['uses' => 'PublicacionController@delte']);
  $router->put('publicaciones/{id}', ['uses' => 'PublicacionController@update']);
});
