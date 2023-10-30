<?php 
    class Luta {
        //Atributos:
        private $desafiado;
        private $desafiante;
        private $rounds;
        private $aprovada;

        //Métodos:
        public function marcarLuta()
        {

        }

        public function lutar()
        {

        }
        
        public function getDesafiado()
        {
                return $this->desafiado;
        }

        public function setDesafiado($desafiado): self
        {
                $this->desafiado = $desafiado;

                return $this;
        }

        public function getDesafiante()
        {
                return $this->desafiante;
        }

        public function setDesafiante($desafiante): self
        {
                $this->desafiante = $desafiante;

                return $this;
        }

        public function getRounds()
        {
                return $this->rounds;
        }

        public function setRounds($rounds): self
        {
                $this->rounds = $rounds;

                return $this;
        }

        public function getAprovada()
        {
                return $this->aprovada;
        }

        public function setAprovada($aprovada): self
        {
                $this->aprovada = $aprovada;

                return $this;
        }
    }
?>