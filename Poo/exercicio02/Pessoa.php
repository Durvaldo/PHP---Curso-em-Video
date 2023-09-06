<?php
class Pessoa{
    //atributos
    private $nome; 
    private $idade;
    private $sexo;
    //metodos
    function fazeraniversario(){
        $this -> setIdade($this -> getIdade() + 1);
    }
    //metodos especiais
    function __construct($no, $id, $se){
        $this -> setNome($no);
        $this -> setIdade($id);
        $this -> setSexo($se);
    }

    function getNome(){
        return $this -> nome;
    }
    function getIdade(){
        return $this -> idade;
    }
    function getSexo(){
        return $this -> sexo;
    }
    function setNome($nome){
        $this -> nome = $nome;
    }
    function setIdade($idade){
        $this -> idade = $idade;
    }
    function setSexo($sexo){
        $this -> sexo = $sexo;
    }

} 