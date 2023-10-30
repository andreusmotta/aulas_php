<?php 
    class Pessoa {
        //Atributos:
        private $nome;
        private $idade;
        private $sexo;

        //Métodos:
        public function fazerAniver()
        {
            $this->idade = $this->idade + 1;
        }

        public function __construct($no, $id, $se)
        {
            $this->nome = $no;
            $this->idade = $id;
            $this->sexo = $se;
        }
      
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