<?php
class Questao9 {

    private static $nome = "Professor Evandro". PHP_EOL;
    
    public static function exibirNome() {
        echo "Nome: " . self::$nome;
    }
}
Questao9::exibirNome();

class Filha9 extends Questao9 {

    public static function exibirNome() {
        echo parent::exibirNome() . " Pinheiro";
    }
}

Filha9::exibirNome();
