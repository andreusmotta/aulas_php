<?php 
    require_once 'Pessoa.php';
    class Professor extends Pessoa {
        //Atributos:
        private $especialidade;
        private $salario;

        //Métodos:
        public function receberAum($aum)
        {
            $this->salario = $this->salario + $aum;
        }

        //Método especiais:
        public function getEspecialidade()
        {
                return $this->especialidade;
        }

        public function setEspecialidade($especialidade): self
        {
                $this->especialidade = $especialidade;

                return $this;
        }

        public function getSalario()
        {
                return $this->salario;
        }

        public function setSalario($salario): self
        {
                $this->salario = $salario;

                return $this;
        }
    }
?>