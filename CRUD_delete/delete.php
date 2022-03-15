<?php

require_once ('../conexao.php');

    if(isset($_GET['id'])){
        $id = mysqli_escape_string($conexao, $_GET['id']);

        $sql = "DELETE FROM info_clientes WHERE id = '$id'";

        if(mysqli_query($conexao, $sql)){
            header('Location: ../CRUD_read/read.php?Deletado');
            exit();
        }else {
            header('Location: ../CRUD_read/read.php?Erro');
            exit();
        }
    }

