<?php
    //Criando a classe
    class Pessoa{
        private $nome = "Juliano";
        private $idade = 20;
        private $sexo = "M";

        public function getNome(){
            return $this->nome;
        }
        public function setNome($nome){
            return $this->nome = $nome;	
        }
        public function getIdade(){
            return $this->idade;
        }
        public function setIdade($idade){
            $this->idade = $idade;
        }
        public function getSexo(){
            return $this->sexo;
        }
        public function setSexo($sexo){
            $this->sexo = $sexo;
        }     
    }
    $p1 = new Pessoa();
    $p1->setNome("Juliano");
    $p1->setIdade(25);
    $p1->setSexo("M");
    echo"Nome - ", $p1->getNome(),"<br>Idade - ", $p1->getIdade(),"<br>Sexo - ", $p1->getSexo();
?>