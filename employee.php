<?php
    class Funcionario{
        private $cargo, $RG, $CPF, $data_nasc;
        public $nome, $salario;        
        public function promocao($indice){
            $this->salario = $this->salario * $indice;
        }
        public function exibe_salario(){
            echo "$this->nome , novo salário: $this->salario";}}

$funcionario_1 = new Funcionario();
$funcionario_1->nome = "Henrico";
$funcionario_1->salario = 10000.00; 
$funcionario_1->promocao(1.10); // 10% de aumento
$funcionario_1->exibe_salario();
