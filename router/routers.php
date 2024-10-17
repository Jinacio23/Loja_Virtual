<?php

//SINTAXE DE ROTAS
// '/caminhoDefinido' => 'NomeController'@'action'

$routes = [
    '/' => 'HomeController@index',
    '/home' => 'HomeController@index',
    '/users/{id}' => 'UserController@show',
    '/teste' => 'TesteController@index',
];