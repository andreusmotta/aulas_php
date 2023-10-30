<?php 
    require_once 'Mamifero.php';
    class Canguru extends Mamifero {

        //Atributos:

        //Métodos:
        public function usarBolsa()
        {
            echo "Carregando na bolsa";
        }

        public function locomover()
        {
            echo "Saltando";
        }

        //Métodos especiais:
        //Não tem porque não tem atributos direto nele, estão na superclasse Mamífero.
    }
?>