<?php 
    interface Controlador { // o certo seria digitar 'public abstract function ligar();', mas só por estar em uma interface os módulos já são abstract.
        public function ligar();
        public function desligar();
        public function abrirMenu();
        public function fecharMenu();
        public function maisVolume();
        public function menosVolume();
        public function ligarMudo();
        public function desligarMudo();
        public function play();
        public function pause();
    }
?>