<?php
    abstract class Pessoa14 {
        //Atributos:
        protected $nome;
        protected $idade;
        protected $sexo;
        protected $experiencia;

        //Método construtor:
        public function __construct($n, $i, $s)
        {
            $this->nome = $n;
            $this->idade = $i;
            $this->sexo = $s;
            $this->experiencia = 0;
        }
        
        //Métodos:
        protected function ganharExp($xp)
        {
            $this->experiencia = $this->experiencia + $xp;
        }

        //Métodos espciais:
        /**
         * Get the value of nome
         */
        public function getNome()
        {
                return $this->nome;
        }

        /**
         * Set the value of nome
         */
        public function setNome($nome): self
        {
                $this->nome = $nome;

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
         * Get the value of sexo
         */
        public function getSexo()
        {
                return $this->sexo;
        }

        /**
         * Set the value of sexo
         */
        public function setSexo($sexo): self
        {
                $this->sexo = $sexo;

                return $this;
        }

        /**
         * Get the value of experiencia
         */
        public function getExperiencia()
        {
                return $this->experiencia;
        }

        /**
         * Set the value of experiencia
         */
        public function setExperiencia($experiencia): self
        {
                $this->experiencia = $experiencia;

                return $this;
        }
    }
?>