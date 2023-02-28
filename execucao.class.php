<?php

require_once("pessoa.class.php");

class Teste{
    private $pessoa;

    public function __construct(){
        $pessoa = new Pessoa();

        $pessoa->setNome("Leticia Pinheiro");
        echo $pessoa->getNome();

    
    }

}new Teste();
?>