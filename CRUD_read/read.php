<?php
//Importa conexão com o banco
    require_once ('../conexao.php');

    $sql = "SELECT * FROM info_clientes";

    $resultado = mysqli_query($conexao, $sql);

?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="read.css">
    <script src="https://kit.fontawesome.com/44758b4b15.js" crossorigin="anonymous"></script>
</head>
<body>

    <nav id="navegue">
        <h2 class="nav-title">Lista de Cadastro</h2>
        <a href="../logaut.php" class="nav-link">Sair</a>
    </nav>

    <div class="conteiner">

        <table class="tabela">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Nome</th>
                    <th>E-mail</th>
                    <th>Genero</th>
                    <th>Data de Nascimento</th>
                    <th>Estado</th>
                    <th>Cidade</th>
                    <th colspan="2">Opções</th>
                </tr>
            </thead>

            <tbody>
                <?php
                    while($dados = mysqli_fetch_assoc($resultado)):
                        echo "<tr>";
                        echo "<td>".$dados['id']."</td>";
                        echo "<td>".$dados['nome']."</td>";
                        echo "<td>".$dados['email']."</td>";
                        echo "<td>".$dados['genero']."</td>";
                        echo "<td>".$dados['data_nasc']."</td>";
                        echo "<td>".$dados['estado']."</td>";
                        echo "<td>".$dados['cidade']."</td>";
                ?>
                <td><a href="../CRUD_update/index.php?id=<?php echo $dados['id'];?>" class="edit"><i class="fa-solid fa-pen"></i></a></td>
                <td><a href="../CRUD_delete/delete.php?id=<?php echo $dados['id'];?>" class="delet"><i class="fa-solid fa-trash-can"></i></a></td>
                <?php
                    endwhile;
                ?>
            </tbody>

        </table>

    </div>

</body>
</html>