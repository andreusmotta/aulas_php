<?php 
    class ContaBanco {
        public $numConta;
        protected $tipo;
        private $dono;
        private $saldo;
        private $status;

        public function __construct() {
            $this->setSaldo(0);
            $this->setStatus(false);
            echo "Conta criada com sucesso";
        }

        public function abrirConta($t) {
            $this->setTipo($t);
            $this->setStatus(true);
            if ($t == "CC") {
                $this->setSaldo(50);
            } elseif ($t == "CP") {
                $this->setSaldo(150);
            }            
        }

        public function fecharConta() {
            if ($this->getSaldo() > 0) {
                echo "Conta com dinheiro, por favor saque o valor antes de fechar.";
            } elseif ($this->getSaldo() < 0) {
                echo "Conta em débito, por favor regulaize antes de fechar";
            } else {
                $this->setStatus(false);
                echo "Conta de ". $this->getDono() ." fechada com sucesso";
            }
        }

        public function depositar($v) {
            if ($this->getStatus() == true) {
                $this->setSaldo($this->getSaldo() + $v);
                echo "<p>Depósito de R$ $v na conta de ". $this->getDono() ."</p>";
            } else {
                echo "Impossível depositar, a conta não está aberta";
            }            
        }

        public function sacar($v) {
            if ($this->getStatus() == true) {
                if ($this->getSaldo() >= $v) {
                    $this->setSaldo($this->getSaldo() - $v);
                    echo "<p>Saque de R$ $v autorizado na conta de ".$this->getDono()."</p>";
                } else {
                    echo "Saldo Insuficiente";
                }
            } else {
                echo "Impossível sacar, a conta está fechada.";
            }            
        }

        public function pagarMensal() {
            if ($this->getTipo() == "CC") {
                $v = 12;
            } elseif ($this->getTipo() == "CP") {
                $v = 20;
            }

            if ($this->getStatus() == true) {
                if ($this->getSaldo() > $v) {
                    $this->setSaldo($this->getSaldo() - $v);
                    echo "<p>Mensalidade de R$ $v debitada da conta de ". $this->getDono() ."</p>";
                } else {
                    echo "Não há saldo suficiente para debitar";
                }
                
            } else {
                echo "Impossível debitar, conta fechada";
            }
            
            
        }

        public function setNumConta($numConta) {
            $this->numConta = $numConta;
        }

        public function getNumConta() {
            return $this->numConta;
        }

        public function setTipo($tipo) {
            $this->tipo = $tipo;
        }

        public function getTipo() {
            return $this->tipo;
        }

        public function setDono($dono){
            $this->dono = $dono;
        }

        public function getDono() {
            return $this->dono;
        }

        public function setSaldo($saldo) {
            $this->saldo = $saldo;
        }

        public function getSaldo() {
            return $this->saldo;
        }

        public function setStatus($status) {
            $this->status = $status;
        }

        public function getStatus() {
            return $this->status;
        }
    }
?>