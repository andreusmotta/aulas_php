<?php 
    class Microfone {
        var $cor;
        var $tipo;
        var $conexão;
        var $ligado;

        function ligar() {
            $this->ligado = true;
        }

        function desligar() {
            $this->ligado = false;
        }
        
        function gravar() {
            if ($this->ligado == true) {
                echo "<p>Gravando sua linda voz...</p>";
            } else {
                echo "<p>Estou desligada, não consigo te ouvir!!!</p>";
            }
        }

    }
?>