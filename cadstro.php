<?php
        include("conexao.php");
        $nome = $_POST["nome"];
        $sobrenome = $_POST["sobrenome"];
        $email = $_POST["email"];
        $senha = $_POST["senha"];
        $confirmar_senha = $_POST["confirmar_senha"];

        if ($senha != $confirmar_senha) {
            echo "Erro: As senhas não coincidem.";
        } else {
            $sql = mysqli_query($banco, "INSERT INTO cadastro VALUES (null, '$nome', '$sobrenome', '$email', '$senha');");
           
            if ($sql) { 
                echo "Contato cadastrado com sucesso";
                echo "<META http-equiv='refresh' content='5,URL=index.php'>";
            } else {
                echo "Não foi possível cadastrar<br>Causa:" . mysqli_error($banco);
            }
        }
        
        mysqli_close($banco);
        ?>