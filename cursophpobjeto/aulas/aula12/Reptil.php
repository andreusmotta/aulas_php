<?php 
    require_once 'Animal.php';
    class Reptil extends Animal{
        
        //Atributos:
        private $corEscama;

        //Métodos:
        public function locomover()
        {
            echo "Rastejando";
        }

        public function alimentar()
        {
            echo "Comendo vegetais";
        }

        public function emitirSom()
        {
            echo "Sibilos";
        }

        //Métodos especiais:
        public function getCorEscama()
        {
                return $this->corEscama;
        }

        /**
         * Set the value of corEscama
         */
        public function setCorEscama($corEscama): self
        {
                $this->corEscama = $corEscama;

                return $this;
        }
    }
?>