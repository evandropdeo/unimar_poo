<?php
    class Livro{
        public $autor;
        public $titulo;
        public $paginas;
        function __construct($autor, $titulo, $paginas){
            $this->autor = $autor;
            $this->titulo = $titulo;
            $this->paginas = $paginas;
        }
        function resumo(){
            return "Título: $this->titulo, Autor: $this->autor \n ";
        }
    }
    $livro_1 = new Livro("Conan Doiler", "Os sete habitos das pessoas mais eficientes", 1099);
    echo $livro_1->resumo();
    $livro_2 = new Livro("Evandro Oliveira", "Minha história com minha filha em 13 dicas de superação", 80);
    echo $livro_2->resumo();