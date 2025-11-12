<?php   
    interface Produto6 {
        public function calcularPreco(); #    
        public function exibir_detalhe(); #
    }   

    class Livro implements Produto6 {
        private $descricao;
        private $preco;
        public function __construct($descricao, $preco) {
            $this->descricao = $descricao;
            $this->preco = $preco;
        }
        function calcularPreco(){ 
            return $this->preco;} 
        function exibir_detalhe(){ 
            return $this->descricao ;}
    }
    
$livro = new Livro("Segurança Web ", "R$ 25,00");
echo $livro->exibir_detalhe();
echo $livro->calcularPreco();