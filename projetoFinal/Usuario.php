<?php

require 'Pessoa.php';
class Usuario extends Pessoa { //herda atribuitps e metodos de pessoa
    private $login;
    private $totAssistido;
    
    public function assistirMaisUm() {
       $this->totAssistido++;
        
    }
    
    public function __construct($nome, $idade,$sexo,$login) {
        parent:: __construct($nome,$idade,$sexo); //chamada da Classe Mae pessoa
        $this->login = $login;
        $this->totAssistido = 0;
    }

    public function getLogin() {
    return $this->login;
    }

    public function getTotAssistido() {
    return $this->totAssistido;
    }

    public function setLogin($login): void {
    $this->login = $login;
    }

    public function setTotAssistido($totAssistido): void {
    $this->totAssistido = $totAssistido;
    }


}