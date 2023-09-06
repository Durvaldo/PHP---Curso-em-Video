<?php
class ContaBanco{
    public $numConta;
    protected $tipo;
    private $dono;
    private $saldo;
    private $status;

    //funções da conta
    public function abrirConta($tipo){
        // if ($tc == "CC"){
        //     $this -> saldo = 50;
        // } elseif ($tc == "CP"){
        //     $this -> saldo = 150;
        // } else{
        //     echo "<p>Esse tipo de conta não é permitido </p>";
        // }
        $this -> tipo = $tipo;
        $this -> status = true;
        switch ($tipo) {            
            case 'CC':
                $this -> setSaldo(50);
                break;
            case 'CP':
               $this -> setSaldo(150);
                break;
            default:
                echo "<p>Esse tipo de conta não é permitido escolha entre 'CC' ou 'CP'</p>";
                $this -> status = false;
                break;
        }
    }
    public function fecharConta(){
        if ($this->getSaldo() > 0) {
            echo "<p>Ainda existe saldo na sua conta</p>";
        } else if ($this-> saldo < 0){
            echo "<p>Conta em debito, por favor regularize</p>";
        } else {
            $this -> setStatus(false);
        }
    }
    public function depositar($deposito){
        if ($this->getStatus()) {
            $this -> setSaldo($this -> getSaldo() + $deposito);
            // $this -> saldo = $this -> saldo + $deposito
            echo "<p>Deposito de $deposito na conta de " .$this->getDono() ."</p>";
        } else{
            echo "<p>Erro,Primeiro você tem que abrir uma conta para poder depositar!</p>";
        }

    }
    public function sacar($saque){
        if($this -> getStatus() && $this -> getSaldo() > $saque){
            $this -> setSaldo($this -> getSaldo() - $saque);
            echo "<p>Saque de $saque autorizado na conta de " .$this->getDono() ."</p>";
        } else {
            echo "<p>Não tem saldo o suficiente</p>";
        }
    }
    public function pagarMensal(){
        switch ($this -> tipo) {            
            case 'CC':
                $this -> setSaldo($this -> getSaldo() - 12);
                break;
            case 'CP':
                $this -> setSaldo($this -> getSaldo() - 20);
                break;
            default:
                echo "<p>Erro com a conta</p>";
                break;
        }
    }
    
    //constructor
    public function __construct(){
        $this -> status = false;
        $this -> saldo = 0;
        echo "<p>Conta criada com sucesso!</p>";
    } 

    // funções get
    public function getNumConta(){
        return $this -> numConta;
    }
    public function getTipo(){
        return $this -> tipo;
    }
    public function getDono(){
        return $this -> dono;
    }
    public function getSaldo(){
        return $this -> saldo;
    }
    public function getStatus(){
        return $this -> status;
    }

    // funções set
    public function setNumConta($num){
        $this -> numConta = $num;
    }
    public function setTipo($t){
        $this -> tipo = $t;
    }
    public function setDono($d){
        $this -> dono = $d;
    }
    public function setSaldo($s){
        $this -> saldo = $s;
    }
    public function setStatus($st){
        $this -> status = $st;
    }
    
}