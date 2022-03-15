<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema de Login</title>
    <link rel="stylesheet" href="login.css">
</head>
<body>

    
    <form class="conteiner" action="acesso.php" method="POST">

        <h1 class="title">Entrar</h1>
        <?php
            if(isset($_SESSION['nao_autenticado'])):
        ?>
        <div class="erro">
            <p><?php echo $_SESSION['nao_autenticado'];?></p>
        </div>
        <?php
            endif;
            unset($_SESSION['nao_autenticado']);
        ?>
        <input type="text" class="input input-email" placeholder="Usuario:" name="nome"><!--input Email-->

        <input type="password" class="input input-password" placeholder="Senha:" name="senha"><!--input senha-->
          
        <button class="btn" type="submit" name="submit">Acessar</button><!--botão logar-->

        <a href="../CRUD_create/insert-data.php">Cadastrar</a>

    </form>
    
</body>
</html>