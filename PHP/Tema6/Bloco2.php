<?php
    //Criando a classe
    class Pessoa{
        public $nome = "Juliano";
        public $idade = 20;
        public $sexo = "M";
        function fazerAniversario($idade){
            $this->idade + 1; 
        }
    }

    class Aluno extends Pessoa{
        public $matricula = 1;
        public $curso = "Informatica";
        function cancelarMatricula($matricula){
            $this->matricula = null;
        }
    }

    $p1 = new Pessoa();
    $a1 = new Aluno();

    print_r($p1);

?>