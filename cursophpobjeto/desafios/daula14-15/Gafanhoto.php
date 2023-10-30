<?php 
    require_once 'Pessoa14.php';
    class Gafanhoto extends Pessoa14 {
        //Atributos:
        private $login;
        private $totAssistido;

        //Método construtor:
        public function __construct($nome, $idade, $sexo, $login)
        {
            parent::__construct($nome, $idade, $sexo);
            $this->login = $login;
            $this->totAssistido = 0;
        }


        //Métodos:
        public function viuMaisUm()
        {
            if ($this->getLogin() == true) {
                $this->totAssistido = $this->totAssistido + 1;
            }
        }

        //Métodos especiais:
        /**
         * Get the value of login
         */
        public function getLogin()
        {
                return $this->login;
        }

        /**
         * Set the value of login
         */
        public function setLogin($login): self
        {
                $this->login = $login;

                return $this;
        }

        /**
         * Get the value of totAssistido
         */
        public function getTotAssistido()
        {
                return $this->totAssistido;
        }

        /**
         * Set the value of totAssistido
         */
        public function setTotAssistido($totAssistido): self
        {
                $this->totAssistido = $totAssistido;

                return $this;
        }
    }
?>