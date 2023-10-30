<?php 
    require_once 'Animal.php';
    class Ave extends Animal {

        //Atributos:
        private $corPena;

        //Métodos:
        public function locomover()
        {
            echo "Voando";
        }

        public function alimentar()
        {
            echo "Comendo frutas";
        }

        public function emitirSom()
        {
            echo "Piando";
        }

        public function fazerNinho()
        {
            echo "Construiu um ninho";
        }

        //Métodos especiais:
        /**
         * Get the value of corPena
         */
        public function getCorPena()
        {
                return $this->corPena;
        }

        /**
         * Set the value of corPena
         */
        public function setCorPena($corPena): self
        {
                $this->corPena = $corPena;

                return $this;
        }
    }
?>