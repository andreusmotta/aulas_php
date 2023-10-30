<?php 
    require_once 'Video.php';
    require_once 'Gafanhoto.php';
    class Visualizacao {
        //Atributos:
        private $espectador;
        private $filme;

        //Método construcotr:
        public function __construct($espectador, $filme)
        {
            $this->espectador = $espectador;
            $this->filme = $filme;
            $this->filme->setViews($this->filme->getViews() + 1);
            $this->espectador->setTotAssistido($this->espectador->getTotAssistido() + 1);
        }

        //Métodos:
        public function avaliar()
        {
                $this->filme->setAvaliacao(5);
        }

        public function avaliarNota($nota)
        {
                $this->filme->setAvaliacao($nota);
        }

        public function avaliarPorc($porc)
        {
                $nova = 0;
                if ($porc <= 20) {
                        $nova = 3;
                } elseif ($porc <= 50) {
                        $nova = 5;
                } elseif ($porc <= 90) {
                        $nova = 8;
                } else {
                        $nova = 10;
                }
                $this->filme->setAvaliacao($nova);
        }

        //Métodos especiais:
        /**
         * Get the value of espectador
         */
        public function getEspectador()
        {
                return $this->espectador;
        }

        /**
         * Set the value of espectador
         */
        public function setEspectador($espectador): self
        {
                $this->espectador = $espectador;

                return $this;
        }

        /**
         * Get the value of filme
         */
        public function getFilme()
        {
                return $this->filme;
        }

        /**
         * Set the value of filme
         */
        public function setFilme($filme): self
        {
                $this->filme = $filme;

                return $this;
        }
    }
?>