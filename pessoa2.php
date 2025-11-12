<?php
// Programação Orientada a Objetos

class Pessoa {
    public $nome;
    public $idade;

    public function apresentar() {
        echo "Olá, meu nome é $this->nome e tenho $this->idade anos.";
    }
}

// Criando um objeto do tipo Pessoa
$p = new Pessoa();
$p->nome = "João Victor";
$p->idade = 20;
$p->apresentar();
?>
