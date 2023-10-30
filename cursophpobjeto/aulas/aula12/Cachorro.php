<?php 
    require_once 'Mamifero.php';
    class Cachorro extends Mamifero {

        //Atributos:

        //Métodos:
        public function enterrarOsso()
        {
            echo "Enterrando osso";
        }

        public function abanarCauda()
        {
            echo "Abanando o cauda";
        }

        //Métodos especiais:
        //Não tem porque não tem atributos direto nele, estão na superclasse Mamífero.
    }
?>