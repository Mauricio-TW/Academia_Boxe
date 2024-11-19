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

  <!--Header-->
  <header>
    <!--Navbar-->
    <div id="nav">
      <input type="checkbox" id="bt_menu" />
      <label for="bt_menu">&#9776</label>
      <nav id="menu">
        <img src="../Imagens/boxeLogo.png" alt="Logo" class="logo">
        <ul>
          <li><a href="index.php">Início</a></li>
          <li><a href="agendamento.php">Agendamento</a></li>
          <li><a href="professores.php">Professores</a></li>
          <li><a href="espaco.php">Espaço</a></li>
          <li><a href="compras.php">Loja</a></li>
          
          <li><a href="administrativo.php" class="admin-link">Área Administrativa</a></li>
        </ul>
        <a href="login.php" class="login-icon"><i class="fas fa-user"></i></a>
      </nav>
    </div>
  </header>

  <main class="container">
    <h1 class="text-center mt-5">Bem-vindo à Área Administrativa</h1>
    
    <!-- Exibir nome do administrador (Placeholder para login futuro com PHP) -->
    <div class="admin-info">
      <h3>Olá, <span id="adminName">Administrador</span>!</h3>
      <p>Aqui você pode gerenciar o conteúdo do site.</p>
    </div>
    
    <div class="admin-options">
      <h4>Opções de Administração</h4>
      <ul>
        <li><a href="editar-professores.php">Editar Professores</a></li>
        <li><a href="editar-treinos.php">Editar Treinos</a></li>
        <li><a href="editar-espaco.php">Editar Espaço</a></li>
        <li><a href="gerenciar-usuarios.php">Gerenciar Usuários</a></li>
        <!-- Mais opções conforme necessário -->
      </ul>
    </div>
  </main>

   <!-- Seção do Mapa -->
   <h2 id="tituloP">Seçao do Mapa do Local</h2>
   <section class="map-section">
     <div class="info">
       <h3>Informações de Contato</h3>
       <p>Endereço: Rua Exemplo, 123, Centro, Porto Alegre, RS, CEP 12345-678</p>
       <p>Telefone: (51) 1234-5678</p>
       <p>Email: contato@senacboxe.com.br</p>
       <p>Horário de Funcionamento:</p>
       <ul>
         <li>Segunda a Sexta: 07:00 - 00:00</li>
         <li>Sábado: 08:00 - 19:00</li>
         <li>Domingo: Fechado</li>
       </ul>
     </div><!--fim da div info-->
     <div class="map-container">
       <div class="frameM">
         <iframe
           src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3453.7963101833193!2d-51.220083804631244!3d-30.042701007070256!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x951978567f17f28d%3A0x2c2c5272bacf4d3a!2sSenac%20Tech!5e0!3m2!1spt-BR!2sbr!4v1718232872653!5m2!1spt-BR!2sbr"
           width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
           referrerpolicy="no-referrer-when-downgrade"></iframe>
       </div><!--fim div frameM-->
     </div> <!--fim div map-container-->
   </section>

  <footer>
    <div class="footer-links">
      <nav>
        <ul class="linkesq">
          <li><a href="https://www.senacrs.com.br/faleconosco" target="_blank">Fale Conosco</a></li>
          <li><a href="https://www.senacrs.com.br/lgpd" target="_blank">Proteção e Privacidade de Dados - LGPD</a></li>
          <li><a href="https://trabalhenosistema.com.br/" target="_blank">Trabalhe Conosco</a></li>
        </ul>
      </nav>
      <nav>
        <ul class="linkdir">
          <li><a href="https://www.senacrs.com.br/sala-imprensa" target="_blank">Sala de Imprensa</a></li>
          <li><a href="https://senacrs.com.br/hotsite/pdf/codigo-etica-senacrs-OFICIAL.pdf" target="_blank">Código de
              Ética</a></li>
          <li><a href="https://senacrs.com.br/hotsite/canal-denuncia/canal_denuncia.php" target="_blank">Denúncia</a>
          </li>
        </ul>
      </nav>
      <nav>
      </nav>
      <ul class="footer-menu">
          <li><a href="#inicio">Início</a></li>
          <li><a href="#agendamento">Agendamento</a></li>
          <li><a href="#professores">Professores</a></li>
          <li><a href="#espaco">Espaço</a></li>
      </ul>
      </nav>
    </div><!-- Fim da div footer-links -->
    <nav id="divfooter">
      <a href="https://www.facebook.com/" class="social-icon facebook"><i class="fab fa-facebook-f"></i></a>
      <a href="https://x.com/" class="social-icon twitter"><i class="fab fa-twitter"></i></a>
      <a href="https://www.instagram.com/" class="social-icon instagram"><i class="fab fa-instagram"></i></a>
      <a href="https://www.linkedin.com" class="social-icon linkedin"><i class="fab fa-linkedin-in"></i></a>
      <a href="https://www.youtube.com/" class="social-icon youtube"><i class="fab fa-youtube"></i></a>
    </nav><!-- Fim da div divfooter -->
    <div id="divfim">
      <p>&copy; 2024 Senac Boxe. Todos os direitos reservados.</p>
    </div><!-- Fim da div divfim -->
  </footer>
  </body>
  
  </html>