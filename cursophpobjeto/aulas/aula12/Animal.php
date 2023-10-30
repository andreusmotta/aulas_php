<?php 
    abstract class Animal {

        //Atributos:
        protected $peso;
        protected $idade;
        protected $membros;

        //Métodos. Como são bastratos não precisam de parâmetros.
        abstract function locomover();
        abstract function alimentar();
        abstract function emitirSom();

        //Métodos especiais:
        /**
         * Get the value of peso
         */
        public function getPeso()
        {
                return $this->peso;
        }

        /**
         * Set the value of peso
         */
        public function setPeso($peso): self
        {
                $this->peso = $peso;

                return $this;
        }

        /**
         * Get the value of idade
         */
        public function getIdade()
        {
                return $this->idade;
        }

        /**
         * Set the value of idade
         */
        public function setIdade($idade): self
        {
                $this->idade = $idade;

                return $this;
        }

        /**
         * Get the value of membros
         */
        public function getMembros()
        {
                return $this->membros;
        }

        /**
         * Set the value of membros
         */
        public function setMembros($membros): self
        {
                $this->membros = $membros;

                return $this;
        }
    }
?>