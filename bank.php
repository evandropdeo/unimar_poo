<?php 
    class Conta{
        private $saldo;
        function __construct($saldo_inicial){
            $this->saldo = $saldo_inicial;}
        function depositar($deposito){
            $this->saldo = $this->saldo + $deposito;}
        function sacar($saque){
            if($this->saldo >= $saque){
                $this->saldo = $this->saldo - $saque;
            } else { 
                echo "Saldo insuficiente", PHP_EOL;}}
        function getSaldo(){
            printf("R$ %.2f \n", $this->saldo);}
    }
$conta_universitaria = new Conta(1000);
$conta_universitaria->getSaldo();
$conta_universitaria->depositar(1000);
$conta_universitaria->getSaldo();
$conta_universitaria->sacar(10000);
$conta_universitaria->sacar(1000);
$conta_universitaria->getSaldo();