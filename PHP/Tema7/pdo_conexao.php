<?php
function novaConexao(){
    $dns = 'mysql:host=localhost;dbname=php_juliano';
    $usuario = 'root';
    $senha = '';
    //Retorno apóes tentativa de conexão
    try{
        $conexao = new PDO($dns, $usuario, $senha);
        return $conexao;
    }catch(PDOException $e){
        echo 'Codigo de falha: '.$e->getCode();
    }
}
    
?>