<?php 
    require_once 'Aluno.php';
    class Tecnico extends Aluno {

        //Atributos:
        private $registroProfissional;

        //Métodos:
        public function praticar()
        {
            echo "O aluno técnico está praticando o curso ". $this->getCurso() .".";
        }

        //Métodos especiais:
        
        /**
         * Get the value of registroProfissional
         */
        public function getRegistroProfissional()
        {
                return $this->registroProfissional;
        }

        /**
         * Set the value of registroProfissional
         */
        public function setRegistroProfissional($registroProfissional): self
        {
                $this->registroProfissional = $registroProfissional;

                return $this;
        }
    }
?>