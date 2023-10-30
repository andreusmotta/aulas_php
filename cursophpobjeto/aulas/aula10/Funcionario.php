<?php 
    require_once 'Pessoa.php';
    class Funcionario extends Pessoa {
        //Atributos:
        private $setor;
        private $trabalhando;

        //Métodos:
        public function mudarTrabalho()
        {
            $this->trabalhando = ! $this->trabalhando;
        }

        //Métodos especiais:
        public function getSetor()
        {
                return $this->setor;
        }

        public function setSetor($setor): self
        {
                $this->setor = $setor;

                return $this;
        }

        public function getTrabalhando()
        {
                return $this->trabalhando;
        }

        public function setTrabalhando($trabalhando): self
        {
                $this->trabalhando = $trabalhando;

                return $this;
        }
    }
?>