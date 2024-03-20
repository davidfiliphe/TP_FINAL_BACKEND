<?php 
    class Estoque {
        private $id;
        private $listaProdutos;

        function __construct() {
            $this->listaProdutos = array();
        }

        public function cadastraProduto($produto){
            array_push($this->listaProdutos, $produto);
        }

    }
?>