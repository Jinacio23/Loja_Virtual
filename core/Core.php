<?php

class Core
{
    public function run($routes)
    {

        // recuperando Home
        $url = '/';

        //verificando se existe url
        isset($_GET['url']) ? $url .= $_GET['url'] : '';

        ($url != '/') ? $url = rtrim($url, '/') : $url;

        //verificando se a rota existe
        $routerFound = false;

        //recuperando chave e valor das rotas
        foreach ($routes as $path => $controller) {

            //reorganiza padrão de rota
            $pattern = '#^' . preg_replace('/{id}/', '(\w+)', $path) . '$#';

            if (preg_match($pattern, $url, $matches)) {
                array_shift($matches);

                //rota existente
                $routerFound = true;

                //desestruturando rotas e actions
                [$currentController, $action] = explode('@', $controller);

                //processando caminho do arquivo
                $dir = __DIR__;
                $part = str_word_count($dir, 1, ':');
                array_pop($part);

                if($part[0] == 'C:'){
                    //Para Windows
                    $newDir = implode('/', $part)."/";
                } else {
                    //Linux do Zé
                    $newDir = '';
                }

                //redirecionando para rota correspondente
                require_once $newDir."app/controller/$currentController.php";

                //Instanciando objeto e executando rota correspondente
                $newController = new $currentController();
                $newController->$action($matches);

            }
        }

        //Retornando rota Not Found
        if (!$routerFound) {
            //processando caminho do arquivo
            $dir = __DIR__;
            $part = str_word_count($dir, 1, ':');
            array_pop($part);

            if($part[0] == 'C:'){
                //Para Windows
                $newDir = implode('/', $part)."/";
            } else {
                //Linux do Zé
                $newDir = '';
            }

            require_once $newDir."app/controller/NotFoundController.php";

            $controller = new NotFoundController();
            $controller->index();
        }

    }
}