<?php 
    require_once 'Animal.php';
    class Peixe extends Animal{

        //Atributos:
        private $corEscama;

        //Métodos:
        public function locomover()
        {
            echo "Nadando";
        }

        public function alimentar()
        {
            echo "Filtrando";
        }

        public function emitirSom()
        {
            echo "Peixe não faz som";
        }

        public function soltarBolha()
        {
            echo "Soltou uma bola";
        }

        //Métodos especiais:
        /**
         * Get the value of corEscama
         */
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