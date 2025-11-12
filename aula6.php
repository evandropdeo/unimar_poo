<?php   
abstract class Funcionario {
    private $nome;
    private $salario;
    abstract function calcularSalario(); #
    public function getNome(){ return $this->nome; }
    public function setNome($nome){ $this->nome = $nome;}
}
class Gerente extends Funcionario{
    function calcularSalario(){ return "R$ 10.000,00";}
}
class Assistente extends Funcionario{
    function calcularSalario(){ return "R$ 5.000,00";}
}
$nicolas = new Gerente();
$nicolas->setNome("Nicolas");
echo $nicolas->calcularSalario();