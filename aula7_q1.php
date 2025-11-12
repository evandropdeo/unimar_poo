<?php
// Aula 7 - Questão 1 
abstract class Pagamento{
    public function Processarpagamento(){
        $this->validarDados();
        $this->concectarAoGateway();
        $this->autorizarPagamento();
        $this->confirmarPagamento();
    }
    abstract function validarDados();
    abstract function concectarAoGateway();
    abstract function autorizarPagamento();
    protected function confirmarPagamento(){
        echo "Pagamento confirmado.\n\n";
    }
}