<?php
class Pessoa {
    private $nome;
    
    public function __construct($nome) {
        $this->nome = $nome;
    }
    
    public function exibirNome() {
        echo "Nome: $this->nome";
    }
}
$pessoa = new Pessoa("João");
$pessoa->exibirNome();
