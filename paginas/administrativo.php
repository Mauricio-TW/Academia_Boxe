<?php

require_once '../banco/conexao.php';
session_start();


if (!isset($_SESSION['usuario_id'])) {
  header("Location: login.php");
  exit();
}


$usuario_nome = $_SESSION['usuario_nome'];
$usuario_email = $_SESSION['usuario_email'];
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
  <link rel="stylesheet" href="../CSS/administrativo.css">
  <link rel="stylesheet" href="../CSS/menu.css">
  <meta name="author" content="Mauricio T Welter">
  <title>Administração - Senac Boxe</title>
  <link rel="icon" href="../Imagens/logoMini.png" type="Logo">
</head>

<body>


  <header>

    <div id="nav">
      <input type="checkbox" id="bt_menu" />
      <label for="bt_menu">&#9776;</label>
      <nav id="menu">
        <img src="../Imagens/boxeLogo.png" alt="Logo" class="logo">
        <ul>
          <li><a href="index.php">Início</a></li>
          <li><a href="agendamento.php">Agendamento</a></li>
          <li><a href="professores.php">Professores</a></li>
          <li><a href="espaco.php">Espaço</a></li>
          <li><a href="compras.php">Loja</a></li>
          <li><a href="logout.php">Sair</a></li>
        </ul>
        <a href="login.php" class="login-icon"><i class="fas fa-user"></i></a>
      </nav>
    </div>
  </header>

  <main class="container">
    <h1 class="text-center mt-5">Bem-vindo à Área Administrativa</h1>

    <!-- Exibe o nome e email do usuário logado -->
    <div class="admin-info">
      <h3>Olá, <?php echo $usuario_nome; ?>!</h3>
      <p>Email: <?php echo $usuario_email; ?></p>
      <p>Aqui você pode gerenciar o conteúdo do site.</p>
    </div>

    <div class="admin-options">
      <h4>Opções de Administração</h4>
      <ul>
        <li><a href="gerenciar-usuarios.php">Gerenciar Usuários</a></li>
        <li><a href="editar-professores.php">Editar Professores</a></li>
        <li><a href="editar-agendamentos.php">Editar agendamento</a></li>
        <li><a href="editar-espaco.php?id=1">Editar Espaço</a></li>

      </ul>
    </div>
  </main>

  <!-- Seção do Mapa -->
  <?php require('mapa.php'); ?>

  <!-- footer -->
  <?php require('footer.php'); ?>

</body>

</html>