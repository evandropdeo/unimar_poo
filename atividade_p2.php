<?php    
    interface Cadastro{
        public function cadastrar(Profissional $profissional);
    }
    class Vaga implements Cadastro{
        private $descricao;
        public $profissionais = [];// cria a lista
        public function cadastrar(Profissional $profissional){
            $this->profissionais[] = $profissional; //adiciona no final da lista
        }
        public function exibirProfissionais(){
            echo "Lista de profissinais da vaga: $this->descricao \n";
            foreach ($this->profissionais as $profissional) {
                echo "- $profissional->exibirInformacoes() \n";
            }
        }
    }
    abstract class Pessoa{}
    class Profissional extends Pessoa{
        public function AplicarVaga(Vaga $vaga) {
            $vaga->cadastrar($this);
        }
        public function exibirInformacoes(){
            echo "Nome: {$this->nome} \n";
            echo "Email: {$this->email} \n";
            echo "Telefone: {$this->telefone} \n";
            echo "Profissão: {$this->profissao} \n";
        }
    }
    $vaga_php = new Vaga();
    $thiago = new Profissional();
    $thiago->aplicarEmVaga($vaga_php);
    $vaga_php->exibirAplicados();

