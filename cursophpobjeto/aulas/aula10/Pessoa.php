<?php 
    class Pessoa {
        //Atributos:
        private $nome;
        private $idade;
        private $sexo;

        //Métodos:
        public function fazerAniv() 
        {
            $this->idade = $this->idade + 1;
        }

        //Métodos especiais:
        public function getNome()
        {
                return $this->nome;
        }

        public function setNome($nome): self
        {
                $this->nome = $nome;

                return $this;
        }

        public function getIdade()
        {
                return $this->idade;
        }

        public function setIdade($idade): self
        {
                $this->idade = $idade;

                return $this;
        }

        public function getSexo()
        {
                return $this->sexo;
        }

        public function setSexo($sexo): self
        {
                $this->sexo = $sexo;

                return $this;
        }
    }
?>