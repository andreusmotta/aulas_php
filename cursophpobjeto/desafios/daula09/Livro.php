<?php 
    require_once 'Pessoa.php';
    require_once 'Publicacao.php';

    class Livro implements Publicacao {
        //Atributos:
        private $titulo;
        private $autor;
        private $totPaginas;
        private $pagAtual;
        private $aberto;
        private $leitor;

        //Métodos:
        
        public function __construct($ti, $au, $tp, $le)
        {
            $this->titulo = $ti;
            $this->autor = $au;
            $this->totPaginas = $tp;
            $this->aberto = false;
            $this->pagAtual = 0;
            $this->leitor = $le;
        }
        
        public function detalhes()
        {
                echo "<hr>Livro " . $this->titulo . " escrito por " . $this->autor . ".";
                echo "<br> Páginas: ". $this->totPaginas . ", página atual " . $this->pagAtual . ".";
                echo "<br> Sendo lido por ". $this->leitor->getNome() . ".";
        }

        //Getters e Setters:
        public function getTitulo()
        {
                return $this->titulo;
        }

        public function setTitulo($titulo): self
        {
                $this->titulo = $titulo;

                return $this;
        }

        public function getAutor()
        {
                return $this->autor;
        }

        public function setAutor($autor): self
        {
                $this->autor = $autor;

                return $this;
        }

        public function getTotPaginas()
        {
                return $this->totPaginas;
        }

        public function setTotPaginas($totPaginas): self
        {
                $this->totPaginas = $totPaginas;

                return $this;
        }

        public function getPagAtual()
        {
                return $this->pagAtual;
        }

        public function setPagAtual($pagAtual): self
        {
                $this->pagAtual = $pagAtual;

                return $this;
        }

        public function getAberto()
        {
                return $this->aberto;
        }

        public function setAberto($aberto): self
        {
                $this->aberto = $aberto;

                return $this;
        }

        public function getLeitor()
        {
                return $this->leitor;
        }

        public function setLeitor($leitor): self
        {
                $this->leitor = $leitor;

                return $this;
        }

        //Implementações da interface:
        public function abrir()
        {
            $this->aberto = true;
        }
        public function fechar()
        {
            $this->aberto = false;
        }

        public function folhear($p)
        {
            if ($p > $this->totPaginas) {
                $this->pagAtual = 0;                
            } else {
                $this->pagAtual = $p;
            }
        }

        public function avançarPag()
        {
            $this->pagAtual = $this->pagAtual + 1;
        }

        public function voltarPag()
        {
            $this->pagAtual = $this->pagAtual - 1;
        }        
    }
?>