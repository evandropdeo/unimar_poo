<?php
    class Produto{
        public $nome;
        private $preco;
        function __construct($nome, $preco){
            $this->nome = $nome;
            $this->preco = $preco;
        }
        function desconto($novo_preco){
            $this->preco = $novo_preco;
            printf("Novo preço: R$ %.2f \n", $this->preco);
        }
        function __destruct(){
            echo "fim \n";
        }
    }
$macbook = new Produto("MacBookPro", 7000);
echo "Produto 1 $macbook->nome \n";
$macbook->desconto(5000);

$dell = new Produto("Dell Inspire", 5000);
echo "Produto 2 $dell->nome \n";
$dell->desconto(4000);