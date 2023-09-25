<?php
require_once 'AcoesVideo.php';

class Video  implements AcoesVideo{
     private $titulo;
     private $avaliacao;
     private $views;
     private $curtida;
     private $reproduzindo;
     
     public function __construct($titulo) {
         $this->titulo = $titulo;
         $this->avaliacao =1;
         $this->views=0;
         $this->curtida =0;
         $this->reproduzindo =false;
     }

     public function getTitulo() {
         return $this->titulo;
     }

     public function getAvaliacao() {
         return $this->avaliacao;
     }

     public function getViews() {
         return $this->views;
     }

     public function getCurtida() {
         return $this->curtida;
     }

     public function getReproduzindo() {
         return $this->reproduzindo;
     }

     public function setTitulo($titulo): void {
         $this->titulo = $titulo;
     }

     public function setAvaliacao($avaliacao): void {
        
         $media= ($this->avaliacao + $avaliacao)/$this->views;
         $this->avaliacao = $media;
     }

     public function setViews($views): void {
         $this->views = $views;
     }

     public function setCurtida($curtida): void {
         $this->curtida = $curtida;
     }

     public function setReproduzindo($reproduzindo): void {
         $this->reproduzindo = $reproduzindo;
     }

        
    public function like() {
        $this->curtida++;
    }

    public function pause() {
        $this->reproduzindo=false;
    }

    public function play() {
        $this->reproduzindo=True;
    }

}
