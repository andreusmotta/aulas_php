<?php 
    require_once 'Animal2.php';
    class Mamifero2 extends Animal2 {
        //Atributos:
        protected $corPelo;

        //Métodos:
        public function emitirSom()
        {
            echo "Som de mamífero";
        }

    }
?>