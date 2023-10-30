<?php 
    require_once 'AcoesVideo.php';
    class Video implements AcoesVideo {
        //Atributos:
        private $titulo;
        private $avaliacao;
        private $views;
        private $curtidas;
        private $reproduzindo;

        //Método construtor:
        public function __construct($titulo)
        {
            $this->titulo = $titulo;
            $this->avaliacao = 1;
            $this->views = 0;
            $this->curtidas = 0;
            $this->reproduzindo = false;
        }

        //Métodos da interface:
        public function play()
        {
            $this->reproduzindo = true;
        }
        
        public function pause()
        {
            $this->reproduzindo = false;
        }

        public function like()
        {
            $this->curtidas = $this->curtidas + 1;
        }

        //Métodos especiais:
        /**
         * Get the value of titulo
         */
        public function getTitulo()
        {
                return $this->titulo;
        }

        /**
         * Set the value of titulo
         */
        public function setTitulo($titulo): self
        {
                $this->titulo = $titulo;

                return $this;
        }

        /**
         * Get the value of avaliacao
         */
        public function getAvaliacao()
        {
                return $this->avaliacao;
        }

        /**
         * Set the value of avaliacao
         */
        public function setAvaliacao($avaliacao)
        {
                $media = ($this->avaliacao + $avaliacao) / $this->views;
                $this->avaliacao = $media;

                
        }

        /**
         * Get the value of views
         */
        public function getViews()
        {
                return $this->views;
        }

        /**
         * Set the value of views
         */
        public function setViews($views): self
        {
                $this->views = $views;

                return $this;
        }

        /**
         * Get the value of curtidas
         */
        public function getCurtidas()
        {
                return $this->curtidas;
        }

        /**
         * Set the value of curtidas
         */
        public function setCurtidas($curtidas): self
        {
                $this->curtidas = $curtidas;

                return $this;
        }

        /**
         * Get the value of reproduzindo
         */
        public function getReproduzindo()
        {
                return $this->reproduzindo;
        }

        /**
         * Set the value of reproduzindo
         */
        public function setReproduzindo($reproduzindo): self
        {
                $this->reproduzindo = $reproduzindo;

                return $this;
        }
    }
?>