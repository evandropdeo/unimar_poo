<?php
require("Veiculo");
    class Carro extends Veiculo{
        public $placa;
        public $num_chassi;
        function __construct($placa, $num_chassi){
            $this->placa = $placa;
            $this->num_chassi = $num_chassi;
        }
        function acelerar($velocidade){
            echo "Placa: $this->placa - Velocidade: $velocidade \n";
        }
    }
    $carro_azul = new Carro("AZUL", 1234);
    $carro_azul->acelerar(20);

    $carro_branco = new Carro("BRANCO", 4312);
    $carro_branco->acelerar(50);
?>