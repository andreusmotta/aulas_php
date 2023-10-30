<?php 
    class Lutador {
        //Atributos:
        private $nome;
        private $nacionalidade;
        private $idade;
        private $altura;
        private $peso;
        private $categoria;
        private $vitorias;
        private $derrotas;
        private $empates;

        //Métodos:

        public function __construct($no, $na, $id, $al, $pe, $vi, $de, $em)
        {
            $this->nome = $no;
            $this->nacionalidade = $na;
            $this->idade = $id;
            $this->altura = $al;
            $this->setPeso($pe);
            $this->vitorias = $vi;
            $this->derrotas = $de;
            $this->empates = $em;

        }

        public function apresentar()
        {
            echo "<p>-----------------------------</p>";
            echo "Lutador ". $this->getNome(). " de ";
            echo " origem ". $this->getNacionalidade()." tem ";
            echo $this->getIdade() ." anos, ";
            echo $this->getAltura() ."m de altura, ";
            echo "pesando ". $this->getPeso() ."kg. ";
            echo "Ganhou ". $this->getVitorias() .", ";
            echo "perdeu ". $this->getDerrotas() ." e ";
            echo "empatou ". $this->getEmpates() .".";
        }

        public function status()
        {
            echo "<p>-----------------------------</p>";
            echo $this->getNome();
            echo " é um peso ". $this->getCategoria().". ";
            echo "Venceu ". $this->getVitorias() .", ";
            echo "perdeu ". $this->getDerrotas() ." e ";
            echo "empatou ". $this->getEmpates() .".";

        }

        public function ganharLuta()
        {
            $this->setVitorias($this->getVitorias() + 1);
        }

        public function perderLuta()
        {
            $this->setDerrotas($this->getDerrotas() + 1);
        }

        public function empatarLuta()
        {
            $this->setEmpates($this->getEmpates() + 1);
        }

        // Getters e Setters:
        public function getNome()
        {
                return $this->nome;
        }

        public function setNome($no): self
        {
                $this->nome = $no;

                return $this;
        }

        public function getNacionalidade()
        {
                return $this->nacionalidade;
        }

        public function setNacionalidade($nacionalidade): self
        {
                $this->nacionalidade = $nacionalidade;

                return $this;
        }

        public function getIdade()
        {
                return $this->idade;
        }

        public function setIdade($idade): self
        {
                $this->idade = $idade;

                return $this;
        }

        public function getAltura()
        {
                return $this->altura;
        }

        public function setAltura($altura): self
        {
                $this->altura = $altura;

                return $this;
        }

        public function getPeso()
        {
                return $this->peso;
        }

        public function setPeso($peso) 
        {
                $this->peso = $peso;
                $this->setCategoria();
        }

        public function getCategoria()
        {
                return $this->categoria;
        }
        
        // public function setCategoria($categoria)
        // {
        //         if ($this->getPeso() < 52.2) {
        //             $categoria = "Inválido";
        //         }
        //         elseif ($this->getPeso() <= 70.3) {
        //             $categoria = "Leve";
        //         }
        //         elseif ($this->getPeso() <= 83.9) {
        //             $categoria = "Médio";
        //         }
        //         elseif ($this->getPeso() <= 120.2) {
        //             $categoria = "Pesado";
        //         }
        //         else {
        //             $categoria = "Inválido";
        //         }
        // }
   
        public function setCategoria()
        {
                if ($this->peso < 52.2) {
                    $this->categoria = "Inválido";
                }
                elseif ($this->peso <= 70.3) {
                    $this->categoria = "Leve";
                }
                elseif ($this->peso <= 83.9) {
                    $this->categoria = "Médio";
                }
                elseif ($this->peso <= 120.2) {
                    $this->categoria = "Pesado";
                }
                else {
                    $this->categoria = "Inválido";
                }
        }

        public function getVitorias()
        {
                return $this->vitorias;
        }

        public function setVitorias($vitorias): self
        {
                $this->vitorias = $vitorias;

                return $this;
        }

        public function getDerrotas()
        {
                return $this->derrotas;
        }

        public function setDerrotas($derrotas): self
        {
                $this->derrotas = $derrotas;

                return $this;
        }

        public function getEmpates()
        {
                return $this->empates;
        }

        public function setEmpates($empates): self
        {
                $this->empates = $empates;

                return $this;
        }
    }
?>