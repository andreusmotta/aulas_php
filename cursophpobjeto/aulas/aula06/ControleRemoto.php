<?php 
    require_once 'Controlador.php';
    class ControleRemoto implements Controlador {
        private $volume;
        private $ligado;
        private $tocando;

        public function __construct()
        {
            $this->volume = 50;
            $this->ligado = false;
            $this->tocando = false;
        }

        private function getVolume()
        {
                return $this->volume;
        }

        private function setVolume($volume): self
        {
                $this->volume = $volume;

                return $this;
        }

        private function getLigado()
        {
                return $this->ligado;
        }

        private function setLigado($ligado): self
        {
                $this->ligado = $ligado;

                return $this;
        }

        private function getTocando()
        {
                return $this->tocando;
        }

        private function setTocando($tocando): self
        {
                $this->tocando = $tocando;

                return $this;
        }

        public function ligar()
        {
            $this->setLigado(true);
        }

        public function desligar()
        {
            $this->setLigado(false);
        }

        public function abrirMenu()
        {
            echo "----- Menu -----";
            echo "<br>Está ligado?: ". ($this->getLigado()?"SIM":"NÃO");
            echo "<br>Está tocando? ". ($this->getTocando()?"SIM":"NÃO");
            echo "<br>Volume ". $this->getVolume();
            echo "<br>";
            for ($i=0; $i <= $this->getVolume(); $i+=10) {
                echo "|";
            }
            echo "<br>";
        }

        public function fecharMenu()
        {
            echo "<br>Fechando menu...";
        }

        public function maisVolume()
        {
            if ($this->getLigado() == true) {
                $this->setVolume($this->getVolume() + 5);
            } else {
                echo "Erro! Não posso aumentar o volume pois a TV está desligada.<br>";
            }
        }

        public function menosVolume()
        {
            if ($this->getLigado() == true) {
                $this->setVolume($this->getVolume() - 5);
            } else {
                "Erro! Não posso diminuir o volume pois a TV está desligada.<br>";
            }
        }

        public function ligarMudo()
        {
            if ($this->getLigado() == true && $this->getVolume() > 0) {
                $this->setVolume(0);
            }
        }

        public function desligarMudo()
        {
            if ($this->getLigado() == true && $this->getVolume() == 0) {
                $this->setVolume(50);
            }
        }

        public function play()
        {
            if ($this->getLigado() == true && !$this->getTocando() == true) {
                $this->setTocando(true);
            }
        }

        public function pause()
        {
            if ($this->getLigado() ==true && $this->getTocando() ==true) {
                $this->setTocando(false);
            }
        }
    }
?>