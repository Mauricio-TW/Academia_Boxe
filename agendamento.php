<?php

include("conexao.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = $_POST["nome"];
    $email = $_POST["email"];
    $data = $_POST["data"];
    $hora = $_POST["hora"];
    $professor_id = $_POST["professor_id"];

    $sql = "INSERT INTO agendamento (nome, email, data, hora, professor_id) 
            VALUES ('$nome', '$email', '$data', '$hora', $professor_id)";

    if (mysqli_query($banco, $sql)) {
        echo "Agendamento realizado com sucesso!";
        echo"<META http-equiv='refresh' content='3,URL=index.html'>";
    } else {
        echo "Erro ao agendar sua aula: " . mysqli_error($banco);
        echo"<META http-equiv='refresh' content='3,URL=agendamento.html'>";
    }

    mysqli_close($banco);
}
?>
