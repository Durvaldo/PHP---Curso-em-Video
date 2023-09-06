<?php
require_once 'Animal.php';
class Peixe extends Animal{
    private $corEscama;
    public function locomover(){
        echo "<p>Nadando</p>";
    }
    public function alimentar(){
        echo "<p>Mamando</p>";
    }
    public function emitirSom(){
        echo "<p>Não emite Som</p>";
    }
    public function soltarBolha(){
        echo "<p>Soltou uma bolha</p>";
    }
    public function getCorEscama(){
        return $this -> corEscama;
    }
    public function setCorEscama($corEscama){
        $this -> corEscama = $corEscama;
    }
}
