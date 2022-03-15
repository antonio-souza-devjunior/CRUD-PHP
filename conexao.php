<?php
//Conexão com o Banco de Dados

//Dados para conexão 
define('db_host', 'Localhost');
define('db_user', 'root');
define('db_senha', 'amin2003');
define('db_nome', 'cadastro');

    //Conectando com o Banco de Dados
    $conexao = mysqli_connect(db_host, db_user, db_senha, db_nome);
    mysqli_set_charset($conexao, "utf8");

    //Verificação se ouve conexão
    /*
    if(mysqli_connect_errno($conexao)){
        echo "Erro! ou conectar com o Banco de Dados";
    }else {
        echo "Conexão feita com Sucesso!";
    }
    */

?>