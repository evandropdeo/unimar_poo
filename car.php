<?php
require("veiculo.php");
    class Carro extends Veiculo {
        public $tipo;

        public function __construct($marca, $modelo, $tipo) {
            parent:: __construct($marca, $modelo); // Chamando o construtor da class
            $this->tipo = $tipo;
        }

        public function detalhes() {
            return parent::detalhes(). ", Tipo: $this->tipo"; // Sobrescrevendo mé
        }
    }

$meuCarro = new Carro("Toyota", "Corolla", "Sedan");
echo $meuCarro->detalhes(); 