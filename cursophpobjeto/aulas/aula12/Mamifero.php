<?php 
    require_once 'Animal.php';
    class Mamifero extends Animal {

        //Atributos:
        private $corPelo;

        //Métodos:
        public function locomover()
        {
            echo "Correndo";
        }

        public function alimentar()
        {
            echo "Mamando";
        }

        public function emitirSom()
        {
            echo "Som gutural";
        }

        //Métodos especiais:
        /**
         * Get the value of corPelo
         */
        public function getCorPelo()
        {
                return $this->corPelo;
        }

        /**
         * Set the value of corPelo
         */
        public function setCorPelo($corPelo): self
        {
                $this->corPelo = $corPelo;

                return $this;
        }
    }
?>