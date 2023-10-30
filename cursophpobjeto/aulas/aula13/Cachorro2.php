<?php 
    require_once 'Lobo2.php';
    class Cachorro2 extends Lobo2 {
        //Num tema tributos:

        //Métodos:
        public function emitirSom()
        {
            echo "Au! Au! Au!";
        }

        function reagirFrase($frase)
        {
            if (($frase == "toma comida") or ($frase == "Olá")) {
                echo "Abanar e Latir";
            } else {
                echo "Rosnar";
            }
        }

        function reagirHora($hora, $min)
        {
            if ($hora < 12) {
                echo "Abanar";
            } elseif ($hora >= 18) {
                echo "Ignorar";
            } else {
                echo "Abanar e Latir";
            }
        }

        function reagirDono($dono)
        {
            if ($dono == true) {
                echo "Abanar";
            } else {
                echo "Rosnar e Latir";
            }
        }

        function reagirIdadePeso($idade, $peso)
        {
            if ($idade < 5) {
                if ($peso < 10) {
                    echo "Abanar";
                } else {
                    echo "Latir";
                }
            } else {
                if ($peso < 10) {
                    echo "Rosnar";
                } else {
                    echo "Ignorar";
                }
            }
        }
    }
?>