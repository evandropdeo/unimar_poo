<?php 
    class Animal {
        static private $qtdanimais = 50;
        public $nome;

        // método statico
        static function getQtd(){
            return self::$qtdanimais . " animais". PHP_EOL;
        }
        // dinâmico
        public function getNome(){
            return "Nome: $this->nome";
        }
    }
    echo Animal::getQtd(); # static

    $animal = new Animal();
    $animal->nome = "Rex";
    echo $animal->getNome(); # da instancia



   