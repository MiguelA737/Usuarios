<?php
    session_start();

    if(empty($_POST["name"]) || empty($_POST["birthdate"]) || empty($_POST["email"])) {

        echo "<p>O seguinte erro aconteceu: <span style='color:#FF0000'>os campos \"Nome\", \"Data de Nascimento\" e \"E-mail\" não foram devidamente preenchidos.</span></p>";
        echo "<a href='listar_usuarios.php'>Clique neste link para voltar à listagem.</a>";

    }

    else {

        $new_user = array("name" => $_POST["name"], "birthdate" => $_POST["birthdate"], "email" => $_POST["email"]);
        
        if(!isset($_SESSION["users"])) {
            $_SESSION["users"] = array($new_user);
        }

        else array_push($_SESSION["users"], $new_user);

        header("Location: listar_usuarios.php");

    }
?>