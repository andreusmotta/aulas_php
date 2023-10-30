<?php 
    require_once 'Pessoa.php';
    class Professor extends Pessoa {

        //Atributos:
        private $especialidade;
        private $salario;

        //Métodos
        public function receberSalario()
        {
            echo "Pagamento do salário de ". $this->getSalario() ." evetuado com sucesso";
        }

        //Métodos especiais:
        
        /**
         * Get the value of especialidade
         */
        public function getEspecialidade()
        {
                return $this->especialidade;
        }

        /**
         * Set the value of especialidade
         */
        public function setEspecialidade($especialidade): self
        {
                $this->especialidade = $especialidade;

                return $this;
        }

        /**
         * Get the value of salario
         */
        public function getSalario()
        {
                return $this->salario;
        }

        /**
         * Set the value of salario
         */
        public function setSalario($salario): self
        {
                $this->salario = $salario;

                return $this;
        }
    }
?>