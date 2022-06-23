<?php
require_once 'Pessoa.php';
require_once 'Publicacao.php';
class Livro implements Publicacao{
    //atributos
    private $titulo;
    private $autor;
    private $totPaginas;
    private $pagAtual;
    private $aberto;
    private $leitor;
    //metodos
    function detalhes(){
        echo "<hr>Livro " . $this -> getTitulo() . " Escrito por " . $this -> getAutor();
        echo "<br>Paginas " . $this -> getTotPaginas() . " Atual " . $this -> getPagAtual();
        echo "<br>Sendo lido por " . $this -> leitor -> getNome();
    }
    //metodos especiais
    function __construct($ti, $au, $tot, $lei){
        $this -> setTitulo($ti);
        $this -> setAutor($au);
        $this -> setTotPaginas($tot);
        $this -> setLeitor($lei);
        $this -> setPagAtual(0);
        $this -> fechar();
    }
    function getTitulo(){
        return $this -> titulo;
    }    
    function getAutor(){
        return $this -> autor;
    }
    function getTotPaginas(){
        return $this -> totPaginas;
    }
    function getPagAtual(){
        return $this -> pagAtual;
    }
    function getAberto(){
        return $this -> aberto;
    }
    function getLeitor(){
        return $this -> leitor;
    }
    function setTitulo($titulo){
        $this -> titulo = $titulo;
    }
    function setAutor($autor){
        $this -> autor = $autor;
    }
    function setTotPaginas($totPaginas){
        $this -> totPaginas = $totPaginas;
    }
    private function setPagAtual($pagAtual){
        $this -> pagAtual = $pagAtual;
    }
    function setAberto($aberto){
        $this -> aberto = $aberto;
    }
    function setLeitor($leitor){
        $this -> leitor = $leitor;
    }

    //metodos abstratos
    public function abrir(){
        $this -> setAberto(TRUE);
    }
    public function fechar(){
        $this -> setAberto(FALSE);
    }
    public function folear($p){
        if($p > $this -> getTotPaginas()){
            $this -> setPagAtual(0);
        }else{
            $this -> setPagAtual($p);
        }
    }
    public function avancarPag(){
        if($this -> getAberto()){
            if($this -> getPagAtual() < $this -> getTotPaginas()){
                $this -> setPagAtual($this -> getPagAtual() + 1);
            }else{
                echo "<p>Já estamos na ultima pagina.</p>";
            }
        }else{
            echo "<p>Primeiro você tem que abrir o livro</p>";
        }
    }
    public function voltarPag(){
        if($this -> getAberto()){
            if($this -> getPagAtual() > 0){
                $this -> setPagAtual($this -> getPagAtual() - 1);
            }else{
                echo "<p>Não tem como volar mais que isso.</p>";
            }
        }else{
            echo "<p>Primeiro você tem que abrir o livro</p>";
        }
    } 

} 