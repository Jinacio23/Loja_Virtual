<?php

//SINTAXE DE ROTAS
// '/caminhoDefinido' => 'NomeController'@'action'

$routes = [
    '/' => 'HomeController@index',
    '/users/{id}' => 'UserController@show',
];