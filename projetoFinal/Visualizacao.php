<?php
require_once 'Video.php';
require_once 'Usuario.php';
class Visualizacao {
    
    Private $espectador;
    private $filme;
    
    public function __construct($espectador,$filme){
        $this->espectador = $espectador;
        $this->filme = $filme;
        $this->filme->setViews($this->filme->getViews()+1);
        $this->espectador->setTotAssistido($this->espectador->getTotAssistido()+1);
        
    }
    //Sobrecarga PHP *este metodo nao existe é um contorno
    public function avaliar() {
        $this->filme->setAvaliacao(5);
        
    }
        public function avaliarNota($nota) {
        $this->filme->setAvaliacao($nota);
    }
        public function avaliarPorc($porc) {
            $nota=$porc*0.1;
            $this->filme->setAvaliacao($nota);
    }
    
    
    public function getEspectador() {
        return $this->espectador;
    }

    public function getFilme() {
        return $this->filme;
    }

    public function setEspectador($espectador): void {
        $this->espectador = $espectador;
    }

    public function setFilme($filme): void {
        $this->filme = $filme;
    }


    
    
}
