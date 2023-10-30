<?php 
class Caneta {
    private $modelo;
    private $ponta;
    private $cor;
    private $tampada;
   
    // Esse jeito usando o Caneta() em vez do __construct Não funcionou. Deve ser mudança do PHP 7 pro 8.
    // public function __construct() { //Esse e o de baixo é a mesma coisa. De baixo é mais bonito.
    // public function Caneta() {    
    //     $this->cor = "Azul";
    //     $this->tampar();
    // }

    public function __construct($m, $c, $p) {
        $this->modelo = $m;
        $this->cor = $c;
        $this->ponta = $p;
        $this->tampar();
    }

    public function tampar() {
        $this->tampada = true;
    }

    public function getModelo() {
        return $this->modelo;
    }

    public function setModelo($m) {
        $this->modelo = $m;
    }

    public function getPonta() {
        return $this->ponta;
        
    }

    public function setPonta($p) {
        $this->ponta = $p;
    }

}
?>