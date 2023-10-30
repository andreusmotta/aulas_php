<?php 
    class ContaBanco {
        public $numConta;
        protected $tipo;
        private $dono;
        private $saldo;
        private $status;

        public function __construct() {
            $this->saldo = 0;
            $this->status = false;
        }

        public function abrirConta() {
            $this->setTipo("CC");
            $this->setStatus(true);
            if ($this->tipo = "CC") {
                $this->saldo = 50;
            } elseif ($this->tipo = "CP") {
                $this->saldo = 150;
            }            
        }

        public function fecharConta() {
            if ($this->saldo > 0) {
                echo "Conta com dinheiro, por favor saque o valor antes de fechar.";
            } elseif ($this->saldo <0) {
                echo "Conta em débito, por favor regulaize antes de fechar";
            } else {
                $this->setStatus(false);
            }
        }

        public function depositar($v) {
            if ($this->status = true) {
                $this->setSaldo($this->getSaldo() + $v);
            } else {
                echo "Impossível depositar, a conta não está aberta";
            }            
        }

        public function sacar($v) {
            if ($this->status = true) {
                if ($this->saldo > $v) {
                    $this->saldo - $v;
                } else {
                    echo "Saldo Insuficiente";
                }
            } else {
                echo "Impossível sacar, a conta está fechada.";
            }            
        }

        public function pagarMensal($val) {
            if ($this->tipo = "CC") {
                $val = 12;
            } elseif ($this->tipo = "CP") {
                $val = 20;
            }
            
            if ($this->status = true) {
                if ($this->saldo > $val) {
                    $this->saldo - $val;
                } else {
                    echo "Saldo Insuficiente";
                }
                
            } else {
                echo "Impossível debitar, conta fechada.";
            }
        }

        public function setNumConta($n) {
            $this->numConta = $n;
        }

        public function getNumConta() {
            return $this->numConta;
        }

        public function setTipo($t) {
            $this->tipo = $t;
        }

        public function getTipo() {
            return $this->tipo;
        }

        public function setDono($d){
            $this->dono = $d;
        }

        public function getDono() {
            return $this->dono;
        }

        public function setSaldo($s) {
            $this->saldo = $s;
        }

        public function getSaldo() {
            return $this->saldo;
        }

        public function setStatus($st) {
            $this->status = $st;
        }

        public function getStatus() {
            return $this->status;
        }
    }
?>