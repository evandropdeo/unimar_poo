<?php
    class Veiculo {
        public $marca;
        public $modelo;

        public function __construct($marca, $modelo){
            $this->marca = $marca;
            $this->modelo = $modelo;
        }

        public function detalhes(){
            return "Marca: $this->marca, Modelo: $this->modelo";
        }
    }

    // aqui