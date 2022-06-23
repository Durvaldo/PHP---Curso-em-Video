<?php
require_once 'Pessoa.php';
class Aluno extends Pessoa{
    //atributo
    private $matr;
    private $curso;
    //metodo
    public function cancelarMat(){
        echo "<p>Matricula será cancelada</p>";
    }
    //metodo especial
    public function getMatr(){
        return $this -> matr;
    }
    public function getCurso(){
        return $this -> curso;
    }
    public function setMatr($matr){
        $this -> matr = $matr;
    }
    public function setCurso($curso){
        $this -> curso = $curso;
    }

}
