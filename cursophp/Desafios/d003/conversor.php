<?php 
            // Cotação atual da ocasião:
            $cotação = 5.17;

            // Quantos dinheiros temos:
            $real = 1000;

            //Conversão pra doletas:
            $dólar = $real / $cotação;

            // Mostrando nossos resultados na tela:
            // echo "Seus R\$" . number_format($real, 2, ",", ".") . " equivalem a US\$" . number_format($dólar, 2, ",", ".")

            //Formatação com internacionalização:
            $padrão = numfmt_create("pt_BR", NumberFormatter::CURRENCY);
            
            echo "Seus " . numfmt_format_currency($padrão, $real, "BRL") . " equivalem a " . numfmt_format_currency($padrão, $dólar, "USD");

        ?>