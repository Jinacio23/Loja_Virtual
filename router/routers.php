<?php

//SINTAXE DE ROTAS
// '/caminhoDefinido' => 'NomeController'@'action'

$routes = [
    //Login
    '/' => 'LoginController@index',
    '/login' => 'LoginController@index',
    
    //Cadastro
    '/cadastro' => 'CadastroController@create',
    '/storeCadastro' => 'CadastroController@store',

    //Home
    '/home' => 'HomeController@index',

    '/users/{id}' => 'UserController@show',
];