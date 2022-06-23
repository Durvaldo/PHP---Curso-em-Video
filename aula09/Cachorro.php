<?php
require_once 'Lobo.php';
class Cachorro extends Lobo{
    public function enterrarOsso(){
        echo "<p>Cachorro saiu pra esconder o osso no quintal</p>";
    }
    public function abanarRabo(){
        echo "<p>Aparentemente o cachorro está feliz</p>";
    }
    public function emitirSom(){
        echo "<p>Au!Au!Au!</p>";
    }
    function reagirFrase($frase){
        
    }    
    function reagirHora($hora, $min){

    }
    function reagirDono($dono){

    }
    function reagirIdadePeso($idade, $peso){

    }

}
