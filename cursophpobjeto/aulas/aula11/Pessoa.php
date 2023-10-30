<?php 
    abstract class Pessoa {

        //Atributos:
        // private $nome;
        // private $idade;
        // private $sexo;

        protected $nome;
        protected $idade;
        protected $sexo;

        //Métodos:
        public final function fazerAniv()
        {

        }

        //Método especiais:
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