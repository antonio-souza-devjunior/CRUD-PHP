<?php

require_once ('../conexao.php');

    $id = mysqli_escape_string($conexao, $_GET['id']);

    if(isset($_POST['submit'])){
        $nome = mysqli_escape_string($conexao, $_POST['nome']);
        $email = mysqli_escape_string($conexao, $_POST['email']);
        $senha = mysqli_escape_string($conexao, $_POST['senha']);
        $genero = mysqli_escape_string($conexao, $_POST['genero']);
        $data_nasc = mysqli_escape_string($conexao, $_POST['data_nasc']);
        $estado= mysqli_escape_string($conexao, $_POST['estado']);
        $cidade = mysqli_escape_string($conexao, $_POST['cidade']);

        $sql = "UPDATE info_clientes SET nome='$nome',email='$email',senha='$senha',genero='$genero',data_nasc='$data_nasc',estado='$estado',cidade='$cidade' WHERE id = '$id'";

        if(mysqli_query($conexao, $sql)){
            header('Location: ../CRUD_read/read.php?Sucesso');
            exit();
        }else {
            header('Location: ../CRUD_read/read.php?Fracasso');
            exit();
        }
    }