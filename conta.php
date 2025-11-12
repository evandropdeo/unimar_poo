<?php
    class Conta{
        public float $saldo;
        function __construct($saldo){
            $this->saldo = $saldo;}
        function depositar($deposito){
            $this->saldo = $this->saldo + $deposito;}
        function sacar($saque){
            if ($this->saldo >= $saque) {
                $this->saldo = $this->saldo - $saque;
            } else { echo "Saldo insuficiente - ", $this->saldo, "\n";}
        }
        function exibir(){
            printf("Saldo: %.2f \n", $this->saldo);
        }
    }
$conta_azul = new Conta(1000.99);
$conta_azul->depositar(1000.99);
$conta_azul->exibir();
$conta_azul->sacar(3000.00);
$conta_azul->sacar(2000.00);
$conta_azul->exibir();