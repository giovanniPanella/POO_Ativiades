<?php

class ContaBanco {
 //atributos
 public $numConta;
 protected $tipo;
 private $nome;
 private $saldo;
 private $status;
 
 //metodos
 public function abrirConta($tipo){
     $this->setTipo($tipo);
     $this->setStatus(True);
     if ($tipo == "cc"){
         $this->setSaldo(50);
     }elseif ($tipo=="cp"){
         $this->setSaldo(150);
     }
     echo "<p>Conta Aberta Com Sucesso!</p>";
 }
 public function fecharConta(){
     if($this->getSaldo()>0){
         echo '<p>A Conta Tem Saldo Favor Sacar</p>';
     }elseif($this->getSaldo()<0){
         echo '<p>A Conta Está Negativa</p>';
     }else{
         $this->setStatus(False);
         echo '<p>A Conta Foi Encerrada</p>';
     }
 }
 public function depositar($valor) {
     if ($this->getStatus()==True){
         $this->setSaldo($this->getSaldo()+$valor);
         echo '<p>Depositado com Sucesso!</p>';
         echo '<p>Seu novo Saldo:'.$this->getSaldo().'</p>';
     }else{
         echo '<p>Impossível Depositar</p>';
     }
 }
 public function sacar($valor){
     if(($this->getStatus()==True) && ($valor<= $this->getSaldo())){
         $this->setSaldo($this->getSaldo()-$valor);
         echo "<p>Foi Sacado $valor, Seu novo Saldo:".$this->getSaldo()."</p>";
     }else{
         echo '<p>Impossível Sacar! Sem Saldo</p>';
     }   
 }
 public function pagarMensal(){
   $v=0;
   if ($this->getTipo()=="cc"){
       $v=12;
   }elseif($this->getTipo()=="cp"){
       $v=20;
   }
   if(($this->getStatus()== True) && ($this->getSaldo()>$v )){
       $this->setSaldo($this->getSaldo()-$v);
   } 
 }
  //construtor
   public function __construct() {
      $this->saldo=0;
      $this->status = False;
  }
//gets e Seters
    public function getNumConta() {
        return $this->numConta;
    }

    public function getTipo() {
        return $this->tipo;
    }

    public function getNome() {
        return $this->nome;
    }

    public function getSaldo() {
        return $this->saldo;
    }

    public function getStatus() {
        return $this->status;
    }

    public function setNumConta($numConta): void {
        $this->numConta = $numConta;
    }

    public function setTipo($tipo): void {
        $this->tipo = $tipo;
    }

    public function setNome($nome): void {
        $this->nome = $nome;
    }

    public function setSaldo($saldo): void {
        $this->saldo = $saldo;
    }

    public function setStatus($status): void {
        $this->status = $status;
    }



    
}
