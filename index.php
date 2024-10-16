<!DOCTYPE html>
<html lang="pt-br">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>loja virtual</title>

   <link rel="stylesheet" href="./public/css/global.css">

   <!-- Bootstrap
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
-->
</head>
<body>
</body>
</html>

<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

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
