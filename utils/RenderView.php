<?php

class RenderView
{

    //Carregando view requisitada
    //loadView(nomeDaView, arrayDeArgumentos)
    //Na controller correspondente - Ex.: loadView('test', ['nome' => 'Jubileu'])
    public function loadView($view, $args)
    {
        extract($args);

        //processando caminho do arquivo
        $dir = __DIR__;
        $part = str_word_count($dir, 1, ':');
        array_pop($part);
        $newDir = implode('/', $part);

        require_once "$newDir/app/view/$view.php";
    }
}