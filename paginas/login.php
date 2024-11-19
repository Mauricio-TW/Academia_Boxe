<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
  <link rel="stylesheet" href="../CSS/menu.css">
  <link rel="stylesheet" href="../CSS/login.css">
  <meta name="author" content="Mauricio T Welter">
  <title>Senac Boxe - Login</title>
  <link rel="icon" href="../Imagens/logoMini.png" type="Logo">
</head>

<body class="bg-fundo-claro">
  <header>
    <!--Navbar-->
    <div id="nav">
      <input type="checkbox" id="bt_menu" />
      <label for="bt_menu">&#9776</label>
      <nav id="menu">
        <img src="../Imagens/boxeLogo.png" alt="Logo" class="logo">
        <ul>
          <li><a href="index.php">Inicio</a></li>
          <li><a href="agendamento.php">Agendamento</a></li>
          <li><a href="professores.php">Professores</a></li>
          <li><a href="espaco.php">Espaço</a></li>
          <li><a href="compras.php">Loja</a></li>
        </ul>
        <a href="login.php" class="login-icon"><i class="fas fa-user"></i></a>
      </nav>
    </div>
  </header>

  <main class="login-container">
    <div class="login-box">
      <div class="left-side">
        <img src="../Imagens/boxeLogo.png" alt="Senac Boxe Logo" class="logo-senac">
      </div>
      <div class="right-side">
        <h1>LOGIN DE CONTA</h1>
        <form action="../backend/login.php" method="post">
          <label for="email">EMAIL</label>
          <input type="email" name="input_email" id="email" required />

          <label for="senha">SENHA</label>
          <input type="password" name="input_senha" id="senha" required />

          <div class="options">
            <div>
              <input type="checkbox" id="lembre" />
              <label for="lembre">Lembre de mim</label>
            </div>
            <a href="#">Esqueceu a senha?</a>
          </div>

          <button type="submit" class="btn-login">Login</button>

          <p class="register">
            Não tem uma conta?
            <a href="cadastro.html">Cadastre-se</a>
          </p>
        </form>
      </div>
    </div>
  </main>

</body>

</html>