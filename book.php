<?php
    class livro{
        private $titulo;
        private $autor;        
        private $paginas;
        function __construct($autor, $titulo, $paginas){
           $this->titulo = $titulo; 
           $this->autor = $autor; 
           $this->paginas = $paginas; }
        public function resumo(){
            return "Título: $this->titulo, autor: $this->autor". PHP_EOL;}}
$meu_livro = new Livro("Evandro P. de O.", "Minha história com minha filha em 13 dicas de superação", 50);
echo $meu_livro->resumo();
$seu_livro = new Livro("Evandro P. de O.", "Segurança de dados", 200);
echo $seu_livro->resumo();