<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
  <link rel="stylesheet" href="../CSS/Style.css">
  <link rel="stylesheet" href="../CSS/menu.css">
  <meta name="author" content="Mauricio T Welter">
  <title>Senac Boxe</title>
  <link rel="icon" href="../Imagens/logoMini.png" type="Logo">
</head>

<body>

  <script src="../script/Script.js"></script>

  <!--Header-->
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


  <!-- Carousel -->
  <div id="demo" class="carousel slide" data-bs-ride="carousel">

    <!-- Indicators/dots -->
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#demo" data-bs-slide-to="0" class="active"></button>
      <button type="button" data-bs-target="#demo" data-bs-slide-to="1"></button>
      <button type="button" data-bs-target="#demo" data-bs-slide-to="2"></button>
    </div>

    <!-- The slideshow/carousel -->
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="../Imagens/academia_01.jpg" alt="Boxe 01" class="d-block" style="width: 100%; height: 550px;">
        <div class="carousel-caption">
          <h3>Treino Intenso</h3>
          <p>Aulas de boxe para fortalecimento físico e mental</p>
        </div>
      </div>
      <div class="carousel-item">
        <img src="../Imagens/academia_02.jpg" alt="Boxe 02" class="d-block" style="width: 100%; height: 550px;">
        <div class="carousel-caption">
          <h3>Técnica Aperfeiçoada</h3>
          <p>Instrutores experientes ajudando você a aprimorar suas habilidades de boxe</p>
        </div>
      </div>
      <div class="carousel-item">
        <img src="../Imagens/academia_03.jpg" alt="Boxe 03" class="d-block" style="width: 100%; height: 550px;">
        <div class="carousel-caption">
          <h3>Comunidade de Campeões</h3>
          <p>Junte-se a nós e faça parte de uma comunidade de apaixonados por boxe</p>
        </div>
      </div>
    </div>

    <!-- Left and right controls/icons -->
    <button class="carousel-control-prev" type="button" data-bs-target="#demo" data-bs-slide="prev">
      <span class="carousel-control-prev-icon"></span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#demo" data-bs-slide="next">
      <span class="carousel-control-next-icon"></span>
    </button>
  </div>

  <!--Seção De Compras-->
  <section class="container mt-5">
    <h2 class="text-center text-danger mb-4">Compre Aqui Seu Equipamento</h2>
    <div class="row">

      <!-- Item 1: Luvas de Boxe -->
      <div class="col-md-4">
        <div class="card mb-4">
          <img src="../Imagens/luvas.jpg" height="300px" width="300px" alt="Luvas de Boxe" class="card-img-top">
          <div class="card-body">
            <h3 class="card-title">Luvas de Boxe</h3>
            <p class="card-text">Luvas de alta qualidade para treinamento.</p>
            <h4 class="card-text text-danger">R$ 99,99</h4>
            <button class="btn btn-danger btn-block" onclick="addToCart('luvas')">Adicionar ao Carrinho</button>
          </div>
        </div>
      </div>

      <!-- Item 2: Protetor Bucal -->
      <div class="col-md-4">
        <div class="card mb-4">
          <img src="../Imagens/protetorB.jpg" height="300px" width="300px" alt="Protetor Bucal"
            class="card-img-top">
          <div class="card-body">
            <h3 class="card-title">Protetor Bucal</h3>
            <p class="card-text">Proteja seus dentes durante os treinos.</p>
            <h4 class="card-text text-danger">R$ 19,99</h4>
            <button class="btn btn-danger btn-block" onclick="addToCart('protetorBucal')">Adicionar ao Carrinho</button>
          </div>
        </div>
      </div>

      <!-- Item 3: Saco de Pancada -->
      <div class="col-md-4">
        <div class="card mb-4">
          <img src="../Imagens/sacoPancada.png" height="277px" width="300px" alt="Saco de Pancada"
            class="card-img-top">
          <div class="card-body">
            <h3 class="card-title">Saco de Pancada</h3>
            <p class="card-text">Treine sua potência de soco com nosso saco de pancada.</p>
            <h4 class="card-text text-danger">R$ 149,99</h4>
            <button class="btn btn-danger btn-block" onclick="addToCart('sacoPancada')">Adicionar ao Carrinho</button>
          </div>
        </div>
      </div>

      <!-- Item 4: Bandagens -->
      <div class="col-md-4">
        <div class="card mb-4">
          <img src="../Imagens/atadura.jpg" height="300px" width="300px" alt="Bandagem de Boxe" class="card-img-top">
          <div class="card-body">
            <h3 class="card-title">Bandagem de Boxe</h3>
            <p class="card-text">Bandagem elástica para proteger as mãos e os pulsos.</p>
            <h4 class="card-text text-danger">R$ 14,99</h4>
            <button class="btn btn-danger btn-block" onclick="addToCart('bandagens')">Adicionar ao Carrinho</button>
          </div>
        </div>
      </div>

      <!-- Item 5: Protetor de Cabeça -->
      <div class="col-md-4">
        <div class="card mb-4">
          <img src="../Imagens/protetor_cabeca.jpg" height="300px" width="300px" alt="Protetor de Cabeça"
            class="card-img-top">
          <div class="card-body">
            <h3 class="card-title">Protetor de Cabeça</h3>
            <p class="card-text">Proteja sua cabeça e rosto durante os sparrings.</p>
            <h4 class="card-text text-danger">R$ 49,99</h4>
            <button class="btn btn-danger btn-block" onclick="addToCart('protetorCabeca')">Adicionar ao
              Carrinho</button>
          </div>
        </div>
      </div>

      <!-- Item 6: Short de Boxe -->
      <div class="col-md-4">
        <div class="card mb-4">
          <img src="../Imagens/short.jpg" height="277px" width="300px" alt="Short de Boxe" class="card-img-top">
          <div class="card-body">
            <h3 class="card-title">Short de Boxe</h3>
            <p class="card-text">Short resistente e confortável para treinos de alta intensidade.</p>
            <h4 class="card-text text-danger">R$ 34,99</h4>
            <button class="btn btn-danger btn-block" onclick="addToCart('shortBoxe')">Adicionar ao Carrinho</button>
          </div>
        </div>
      </div>
    </div>

    <div class="container mt-5">
      <h2 class="text-center text-danger">Carrinho de Compras</h2>
      <ul id="cart" class="list-group"></ul>
      <div class="text-center mt-3">
        <h4>Total: <span id="total" class="text-danger">R$ 0,00</span></h4>
        <button class="btn btn-danger mt-3 mx-2" onclick="checkout()">Finalizar Compra</button>
        <button class="btn btn-secondary mt-3 mx-2" onclick="clearCart()">Limpar Carrinho</button>
      </div>
    </div>
  </section>

  <!--Espaço entre Grafico e Mapa-->
  <div class="mt-3"></div>


  <div class="footer-linha-container"></div>

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