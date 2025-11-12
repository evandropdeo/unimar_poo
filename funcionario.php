<?php   
    class Funcionario{
        public $nome;
        private $rg;
        private $cpf;
        public $salario;
        private $cargo;
        private $data_nasc;

        function promocao($porcentagem){
            $this->salario = $this->salario + ($this->salario * $porcentagem);
        }
    }

$joao = new Funcionario();
$joao->nome = "João da Silva \n";
$joao->salario = 1000.00;
echo "Funcionário: $joao->nome \n";
echo "Salário: $joao->salario \n";
echo <<<EOD
Este funcionário   
Foi promovido com 10% de aumento \n
EOD;  
$joao->promocao(0.10);
echo "Novo Salário: $joao->salario \n";

$gabriel = new Funcionario();
$gabriel->nome = "Gabriel oliveira \n";
echo "Funcionário: $gabriel->nome \n";