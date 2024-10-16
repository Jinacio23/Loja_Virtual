<?php

class CadastroController extends RenderView
{
    public function create(){
        $this->loadView('cadastro',[]);
    }

    public function store(){
        $name = $_POST['name']; 
        $email = $_POST['email']; 
        $password = $_POST['password']; 

        echo $name, $email, $password;
    }
}