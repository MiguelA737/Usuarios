<?php
    session_start();
?>
<html>
    <head>
        <title>Listagem de Usuários</title>
        <meta charset="utf-8">
    </head>
    <body>

        <div>

            <button onclick="formNewUser()">Cadastrar Novo Usuário</button>
            
            <br><br>
            
            <div id="data" style="display:none; border:1px #000000 solid">
                <form id="form" method="" action="">
                    <input type="hidden" name="id">
                    <p id="op"></p>
                    <label for="name">Nome: </label><input type="text" name="name" required><br>
                    <label for="birthdate">Data de Nascimento: </label><input type="date" name="birthdate" required><br>
                    <label for="email">E-mail: </label><input type="email" name="email" required><br>
                    <br>
                    <input type="submit" value="Enviar">
                </form>
            </div>

        </div>

        <br>

        <div>
            <?php
                if(isset($_SESSION["users"])) {

                    echo "  <table style='border:1px #000000 solid'>";
                    echo "      <tr>";
                    echo "          <td style='border:1px #000000 solid'>Id</td>";
                    echo "          <td style='border:1px #000000 solid'>Nome</td>";
                    echo "          <td style='border:1px #000000 solid'>Data de Nascimento</td>";
                    echo "          <td style='border:1px #000000 solid'>E-mail</td>";
                    echo "          <td style='border:1px #000000 solid'>Opções</td>";
                    echo "      </tr>";

                    foreach($_SESSION["users"] as $id => $user) {
                        
                        echo "  <tr>";
                        echo "      <td style='border:1px #000000 solid' id='id". $id ."'><a href='exibir_usuario.php?id=" . $id . "'>" . $id . "</a></td>";
                        echo "      <td style='border:1px #000000 solid' id='name". $id ."'>" . $user["name"] . "</td>";
                        echo "      <td style='border:1px #000000 solid' id='birthdate". $id ."'>" . $user["birthdate"] . "</td>";
                        echo "      <td style='border:1px #000000 solid' id='email". $id ."'>" . $user["email"] . "</td>";
                        echo "      <td style='border:1px #000000 solid'>";
                        echo "          <button onclick='formEditUser(" . $id . ")'>Alterar</button>";
                        echo "          <button onclick=\"location.href='excluir_usuario.php?id=" . $id . "'\">Excluir</button>";
                        echo "      </td>";
                        echo "  </tr>";

                    }

                    echo "  </table>";

                }
            ?>
        </div>

    </body>
    <script>
        function formNewUser() {

            document.getElementById("data").style.display = "block";
            form = document.getElementById("form");

            document.getElementById("op").innerHTML = "Cadastrar";

            form.id.value = "";
            form.name.value = "";
            form.birthdate.value = "";
            form.email.value = "";

            form.action = "cadastrar_usuario.php";
            form.method = "post";

        }

        function formEditUser(id) {

            document.getElementById("data").style.display = "block";
            form = document.getElementById("form");

            document.getElementById("op").innerHTML = "Alterar";

            form.id.value = id;
            form.name.value = document.getElementById("name" + id).innerHTML;
            form.birthdate.value = document.getElementById("birthdate" + id).innerHTML;
            form.email.value = document.getElementById("email" + id).innerHTML;

            form.action = "editar_usuario.php";
            form.method = "post";

        }
    </script>
</html>