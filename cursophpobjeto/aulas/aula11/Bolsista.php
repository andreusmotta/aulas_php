<?php 
    require_once 'Aluno.php';
    class Bolsista extends Aluno {

        //Atributos:
        private $bolsa;

        //Métodos:
        public function renovarBolsa() 
        {
            echo "Bolsa de estudo do aluno ". $this->getNome() ." renovada.";
        }

        public function pagarMensalidade()
        {
            echo "O aluno ". $this->getNome() ." é bolsista e pega a mesalidade com desconto.";
        }

        //Métodos especiais:
        public function getBolsa()
        {
                return $this->bolsa;
        }

        public function setBolsa($bolsa): self
        {
                $this->bolsa = $bolsa;

                return $this;
        }
    }
?>