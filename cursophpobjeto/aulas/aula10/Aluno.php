<?php 
    require_once 'Pessoa.php';
    class Aluno extends Pessoa {
        //Atributos:
        private $matr;
        private $curso;

        //Métodos:
        public function cancelarMatr()
        {
            echo "Matricula será cancelada";
        }

        //Métodos especiais:
        public function getMatr()
        {
                return $this->matr;
        }

        public function setMatr($matr): self
        {
                $this->matr = $matr;

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