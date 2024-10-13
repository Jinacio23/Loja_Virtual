<?php
require_once __DIR__.'/core/Core.php';
require_once __DIR__.'/router/routers.php';

//Auto reload de views e models
spl_autoload_register(function($file){

   //Verificando se o arquivo existe
   if(file_exists(__DIR__."/utils/$file.php")){
      require_once __DIR__."/utils/$file.php";
   } else if(file_exists(__DIR__."/app/model/$file.php")){
      require_once __DIR__."/app/model/$file.php";
   }

});

//Inicializando rotas
$core = new Core();
$core->run($routes);
