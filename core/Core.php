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
                $part = explode('\\', $dir);
                array_pop($part);
                $newDir = implode('\\', $part);

                //redirecionando para rota correspondente
                require_once "$newDir/app/controller/$currentController.php";

                //Instanciando objeto e executando rota correspondente
                $newController = new $currentController();
                $newController->$action($matches);

            }
        }

        //Retornando rota Not Found
        if (!$routerFound) {
            //processando caminho do arquivo
            $dir = __DIR__;
            $part = explode('\\', $dir);
            array_pop($part);
            $newDir = implode('\\', $part);

            require_once "$newDir/app/controller/NotFoundController.php";

            $controller = new NotFoundController();
            $controller->index();
        }

    }
}