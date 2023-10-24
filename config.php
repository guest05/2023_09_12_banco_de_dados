<?php

    $dbHost = 'Localhost';
    $dbUsername = 'aluno';
    $dbPassword = 'admin';
    $dbName = '2023_09_12_banco_de_dados';
    
    $conexao = new mysqli($dbHost,$dbUsername,$dbPassword,$dbName);

    // if($conexao->connect_errno)
    // {
    //     echo "Erro";
    // }
    // else
    // {
    //     echo "Conexão efetuada com sucesso";
    // }

?>
