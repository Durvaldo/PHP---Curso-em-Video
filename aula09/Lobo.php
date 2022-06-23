<?php
require_once 'Mamiferophp';
class Cachorro extends Mamifero{
    public function enterrarOsso(){
        echo "<p>Cachorro saiu pra esconder o osso no quintal</p>";
    }
    public function abanarRabo(){
        echo "<p>Aparentemente o cachorro está feliz</p>";
    }
    public function emitirSom(){
        echo "<p>Au!Au!Au!</p>";
    }
}