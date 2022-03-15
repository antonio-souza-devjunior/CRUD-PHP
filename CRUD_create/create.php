<?php
//Requisição da conexão.php
    require_once ('../conexao.php');

//Verificação se button(submit) foi enviado com os DADOS
    if(isset($_POST['submit'])){
        //var_dump($_POST);
    //Enviando dados para variaveis e verificando se não à ataque sqlInjection
        $nome = mysqli_escape_string($conexao, $_POST['nome']);
        $email = mysqli_escape_string($conexao, $_POST['email']);
        $senha = mysqli_escape_string($conexao, $_POST['senha']);
        $genero = mysqli_escape_string($conexao, $_POST['genero']);
        $data_nasc = mysqli_escape_string($conexao, $_POST['data_nasc']);
        $estado = mysqli_escape_string($conexao, $_POST['estado']);
        $cidade = mysqli_escape_string($conexao, $_POST['cidade']);
    
    //Enviando dados para o banco
        $sql = "INSERT INTO info_clientes(nome,email,senha,genero,data_nasc,estado,cidade) 
                VALUES('$nome','$email','$senha','$genero','$data_nasc','$estado','$cidade')";
        
        if(mysqli_query($conexao, $sql)){
            header('Location: insert-data.php?Sucesso');
            exit();
        }else {
            header('Location: insert-data.php?Falha');
            exit();
        }

    }

?>