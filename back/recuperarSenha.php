<?php

include("conexao.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {    
    $email = $_POST["email_input"];
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        header("Location: recuperarSenha.php?error=email_invalido");  
        echo"<META http-equiv='refresh' content='3,URL=recuperarSenha.html'>";  
    }

    $to = $email;
    $subject = "Recuperação de Senha";
    $message = "Olá,\r\n\r\nVocê solicitou a recuperação de senha. Aqui estão as instruções para recuperar sua senha. <insira link para recuperação ak>. Caso não tenha sido você desconsidere este e-mail.\r\n\r\nAtenciosamente,\r\nEquipe Senac Boxe";
    $headers = "From: suaconta@example.com";

    if (mail($to, $subject, $message, $headers)) {
        header("Location: login.html?success=email_enviado"); 
        echo"<META http-equiv='refresh' content='3,URL=login.html'>";       
    } else {        
        header("Location: recuperarSenha.php?error=erro_envio_email");
        echo"<META http-equiv='refresh' content='3,URL=recuperarSenha.html'>";
    }
}
?>
