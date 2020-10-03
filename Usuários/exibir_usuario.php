<?php
    session_start();

    if(empty($_GET["id"]) && $_GET["id"] != 0) {
            
        echo "<p>O seguinte erro aconteceu: <span style='color:#FF0000'>o campo \"Id\" não foi devidamente preenchido.</span></p>";
        echo "<a href='listar_usuarios.php'>Clique neste link para voltar à listagem.</a>";

    }

    else {

        $id = $_GET["id"];
        
        echo "<h3 style='display:inline'>Id: </h3><p style='display:inline'>" . $id . "</p><br>";
        echo "<h3 style='display:inline'>Nome: </h3><p style='display:inline'>" . $_SESSION["users"][$id]["name"] . "</p><br>";
        echo "<h3 style='display:inline'>Data de Nascimento: </h3><p style='display:inline'>" . $_SESSION["users"][$id]["birthdate"] . "</p><br>";
        echo "<h3 style='display:inline'>E-mail: </h3><p style='display:inline'>" . $_SESSION["users"][$id]["email"] . "</p><br>";
        
        echo "<br>";
        echo "<a href='listar_usuarios.php'>Clique neste link para voltar à listagem.</a>";

    }
?>