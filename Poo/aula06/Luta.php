<?php
require_once 'Lutador.php';
class Luta{
    //atributos
    private $desafiado;
    private $desafiante;
    private $rounds;
    private $aprovada;
    //metodos Publicos
    public function marcarLuta($l1, $l2){
        if ($l1 -> getCategoria() === $l2 -> getCategoria() && ($l1 != $l2)){
            $this -> aprovada = true;
            $this -> desafiado = $l1;
            $this -> desafiante = $l2;
        }else{
            $this -> aprovada = false;
            $this -> desafiado = null;
            $this -> desafiante = null;
        }
    } 
    public function lutar(){
        if ($this -> aprovada){
            $this -> desafiado -> apresentar();
            $this -> desafiante -> apresentar();
            $vencedor = rand(0, 2);
            switch ($vencedor) {
                case 0:
                    echo "<p>Empate</p>";
                    $this -> desafiado -> empatarLuta();
                    $this -> desafiante -> empatarLuta();
                    break;
                case 1:
                    echo "<p>" . $this -> desafiado ->getNome(). " Venceu luta!</p>";
                    $this -> desafiado -> ganharLuta();
                    $this -> desafiante -> perderLuta();
                    break;
                case 2:
                    echo "<p>" . $this -> desafiante ->getNome(). " Venceu luta!</p>";
                    $this -> desafiado -> perderLuta();
                    $this -> desafiante -> ganharLuta();
                    break;

            }

        } else{
            echo "<p>Luta não pode acontecer</p>";
        }

    }
    function getDesafiado (){
        return $this ->desafiado ;
    }
    function getdesafiante (){
        return $this -> desafiante;
    }
    function getRound (){
        return $this -> round;
    }
    function getAprovada (){
        return $this -> aprovada;
    }
    function setDesafiado ($desafiado){
        $this -> desafiado = $desafiado;
    }
    function setDesafiante ($desafiante){
        $this -> desafiante = $desafiante;
    }
    function setRound ($round){
        $this -> round = $round;
    }
    function setAprovada ($aprovada){
        $this -> aprovada = $aprovada;
    }


}