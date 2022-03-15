<?php

    include_once ('conexao.php');

    $sql = "SELECT * FROM info_clientes";

    $result = mysqli_query($conexao, $sql);

    var_dump(mysqli_fetch_assoc($result));
    var_dump(mysqli_fetch_assoc($result));

?>