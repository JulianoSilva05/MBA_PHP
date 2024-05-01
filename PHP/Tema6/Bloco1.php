/*
Orientaçao a Objetos com PHP
*/
<?php
class Pessoa
{
    //Atributos
    public $nome = "Juliano";
    public $idade = 34;
    public $endereco = "Rua Rio Claro, 77";

    //Métodos
    function imprimePessoa()
    {
        return "Nome: {$this->nome} Idade: {$this->idade} Endereço: {$this->endereco}";
    }
}
$p1 = new Pessoa;
echo $p1->nome;

$p1->imprimePessoa();
?>