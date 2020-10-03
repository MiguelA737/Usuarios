<?php
    session_start();

    if(empty($_GET["id"]) && $_GET["id"] != 0) {
        
        echo "<p>O seguinte erro aconteceu: <span style='color:#FF0000'>o campo \"Id\" não foi devidamente preenchido.</span></p>";
        echo "<a href='listar_usuarios.php'>Clique neste link para voltar à listagem.</a>";

    }

    else {

        array_splice($_SESSION["users"], intval($_GET["id"]), 1);

        header('Location: listar_usuarios.php');

    }
?>