<?php   class Aluno{
    private $nome, $idade, $ra, $curso;
    private static $alunos_cadastrados;

    function __construct(){
        self::soma_aluno();
    }
    static function soma_aluno(){
        self::$alunos_cadastrados +=1;
    }
    static function exibe_total_aluno(){
        echo self::$alunos_cadastrados;
    }
}
$caio = new Aluno();
$raul = new Aluno();
$emanuel = new Aluno();
Aluno::exibe_total_aluno();