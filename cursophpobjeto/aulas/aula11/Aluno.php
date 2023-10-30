<?php 
    require_once 'Pessoa.php';
    class Aluno extends Pessoa {

        //Atributos
        private $matricula;
        private $curso;

        //Métodos:
        public function pagarMensalidade() 
        {
            echo "Pagando a mensalidade do aluno ". $this->getNome() .".";
        }
 
        //Métodos especiais:
        public function getMatricula()
        {
                return $this->matricula;
        }

        public function setMatricula($matricula): self
        {
                $this->matricula = $matricula;

                return $this;
        }

        public function getCurso()
        {
                return $this->curso;
        }

        public function setCurso($curso): self
        {
                $this->curso = $curso;

                return $this;
        }
    }
?>