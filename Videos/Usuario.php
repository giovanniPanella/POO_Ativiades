<?php
require_once 'Pessoa.php';
class Usuario extends Pessoa{ //Herda atr e Met de Pessoa
       private $login;
       private $totAssistido;
       
       public function __construct($nome, $idade,$sexo,$login) {
           parent:: __construct($nome,$idade,$sexo);//chama Classe Mae
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

              
       
       public function viuMaisUm() {
           $this->totAssistido ++;
       }
       
    
    
    
    
    
    
}
