<?php
    //requisitar a conexão
    require_once"pdo_conexao.php";
    //Query para criar a tabela
    $query = 'create table if not exists usuario(
                nome varchar(50) not null,
                idade varchar(3) not null,
                sexo varchar(1) not null
            )';
    //conectar e criar a tabela
    $conexao = novaConexao();
    $retorno = $conexao->exec($query);
    echo $retorno;


?>