<?php
session_start();
//Requisição da conexão.php
    require ('../conexao.php');

//Inserindo dados nas variaveis e verificando se à ataque sqlInjection
    //var_dump($_POST);
    $nome = mysqli_escape_string($conexao, $_POST['nome']);
    $senha = mysqli_escape_string($conexao, $_POST['senha']);

//Verificando se a dados nas variaveis
    if(empty($nome) || empty($senha)){
        $_SESSION['nao_autenticado'] = "Insira usuario e senha!";
        header('Location: index.php');
    }else {
//Verificando se à nome e senha no Banco de Dados
        $sql = "SELECT * FROM info_clientes WHERE nome = '$nome' AND senha = '$senha'";

        $resultado = mysqli_query($conexao, $sql);
        //echo mysqli_num_rows($resultado);
        $dados = mysqli_fetch_array($resultado);
        //var_dump($dados);
        
        if(mysqli_num_rows($resultado) == 1){
            $_SESSION['nome'] = $dados['nome']; 
            header('Location: ../CRUD_read/read.php');
            exit();
        }else {
            $_SESSION['nao_autenticado'] = "Usuario/Senha Invalido!";
            header('Location: index.php');
            exit();
        }
    }

?>