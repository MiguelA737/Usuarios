<?php
    session_start();

    if((!isset($_POST["id"])) || empty($_POST["name"]) || empty($_POST["birthdate"]) || empty($_POST["email"])) {
        
        echo "<p>O seguinte erro aconteceu: <span style='color:#FF0000'>os campos \"Id\", \"Nome\", \"Data de Nascimento\" e \"E-mail\" não foram devidamente preenchidos.</span></p>";
        echo "<a href='listar_usuarios.php'>Clique neste link para voltar à listagem.</a>";

    }

    else {

        $new_user = array("name" => $_POST["name"], "birthdate" => $_POST["birthdate"], "email" => $_POST["email"]);

        array_splice($_SESSION["users"], intval($_POST["id"]), 1, [$new_user]);

        header('Location: listar_usuarios.php');

    }
?>