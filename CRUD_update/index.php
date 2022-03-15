<?php

    require_once ('../conexao.php');

    $id = mysqli_escape_string($conexao, $_GET['id']);

    $sql = "SELECT * FROM info_clientes WHERE id = '$id'";

    $resultado = mysqli_query($conexao, $sql);

    $dados = mysqli_fetch_assoc($resultado);


?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
    <link rel="stylesheet" href="update.css">
</head>
<body>
    
    <form class="conteiner" action="update.php?id=<?php echo $dados['id'];?>" method="POST">

        <fieldset class="conteiner-child">
            <legend class="title">Formulario de Clientes</legend>
            
            <div class="campo-input">
                <input type="text" class="input input-nome" required id="nome" name="nome" value="<?php echo $dados['nome'];?>">
                <label for="nome" class="descricao">Nome:</label>
            </div><!-- campo-input -->

            <div class="campo-input">
                <input type="email" class="input input-email" required id="email" name="email" value="<?php echo $dados['email'];?>"> 
                <label for="email" class="descricao">E-mail</label>
            </div><!-- campo-input -->

            <div class="campo-input">
                <input type="password" class="input input-senha" required id="senha" name="senha" value="<?php echo $dados['senha'];?>">
                <label for="senha" class="descricao">Senha:</label>
            </div><!-- campo-input -->

            <div class="campo-input-radiu">
                <p class="sub-title">Sexo:</p>
                
                    <input type="radio" id="masculino" value="masculino" require name="genero">
                    <label for="masculino">Masculino</label>
                
                
                    <input type="radio" id="feminino" value="feminino" require name="genero">
                    <label for="feminino">feminino</label>
                
                
                    <input type="radio" id="outro" value="outro" require name="genero">
                    <label for="outro">Outro</label>
                  
            </div><!-- campo-input-radiu -->

            <div class="campo-input-data">
                <label for="data-nasc">Data de nascimento:</label>
                <input type="date" id="data-nasc" require name="data_nasc" value="<?php echo $dados['data_nasc'];?>">
            </div><!-- campo-input-data -->

            <div class="campo-input">
                <input type="text" class="input input-estado" id="estado" required name="estado" value="<?php echo $dados['estado'];?>">
                <label for="estado" class="descricao">Estado:</label>
            </div><!-- campo-input -->

            <div class="campo-input">
                <input type="text" class="input input-cidade" id="cidade" required name="cidade" value="<?php echo $dados['cidade'];?>">
                <label for="cidade" class="descricao">Cidade:</label>
            </div><!-- campo-input -->
            <div class="button">
            <button type="submit" name="submit" class="btn">Atualizar</button>
            </div>
        </fieldset><!-- conteiner-child -->

    </form>

</body>
</html>