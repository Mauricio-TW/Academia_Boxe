<?php
    include("conexao.php");
    $nome = $_POST["nome"];
    $sobrenome = $_POST["sobrenome"];
    $email = $_POST["email"];
    $senha = $_POST["senha"];

    $sql = mysqli_query($banco, "INSERT INTO cadastro VALUES (null, '$nome', '$sobrenome', '$email', '$senha');");
       
    if ($sql) { 
        echo "Contato cadastrado com sucesso";
        echo "<META http-equiv='refresh' content='3,URL=index.html'>";
    } else {
        echo "Não foi possível cadastrar<br>Causa:" . mysqli_error($banco);
        echo"<META http-equiv='refresh' content='3,URL=cadastro.html'>";
    }
    
    mysqli_close($banco);
?>
