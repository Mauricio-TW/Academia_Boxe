<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
  <link rel="stylesheet" href="../CSS/professores.css">
  <link rel="stylesheet" href="../CSS/menu.css">
  <meta name="author" content="Mauricio T Welter">
  <title>Senac Boxe</title>
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

  <!--Seção Professores-->
  <section id="professores">
    <div class="container">
      <h2 class="tituloP">Nossos Professores</h2>

      <!-- Professor João -->
      <div class="professor">
        <img src="../Imagens/treinador 1.jpg" alt="Professor João Silva" class="professor-img">
        <div class="descricao">
          <h3>Professor João Silva</h3>
          <p>Com mais de uma década de dedicação ao boxe, o Professor João Silva é um treinador experiente que alia
            técnicas refinadas a uma abordagem motivadora. Ele é conhecido por incentivar seus alunos a superar limites
            e desenvolver não apenas habilidades físicas, mas também confiança e resiliência. Seus treinamentos são
            cuidadosamente planejados para preparar os alunos para desafios dentro e fora do ringue, promovendo
            disciplina e autoconfiança.</p>
          <p>
            <a href="https://www.instagram.com/" class="social-icon professor-instagram">
              <i class="fab fa-instagram"></i> @JoaoSilva
            </a>
          </p>
          </p>
        </div>
      </div>

      <!-- Professora Maria -->
      <div class="professor">
        <img src="../Imagens/treinadora 1.jpg" alt="Professora Maria Santos" class="professor-img">
        <div class="descricao">
          <h3>Professora Maria Santos</h3>
          <p>Campeã nacional de boxe, a Professora Maria Santos é uma verdadeira inspiração para seus alunos. Sua
            carreira de sucesso é marcada pela determinação e pela superação de obstáculos, atributos que ela leva ao
            ringue e transmite em suas aulas. Com uma didática clara e envolvente, ela não apenas compartilha técnicas
            avançadas, mas também busca instigar em seus alunos o mesmo espírito de luta e coragem que a guiou ao longo
            de sua jornada.</p>
          <p>
            <a href="https://www.instagram.com/" class="social-icon professor-instagram">
              <i class="fab fa-instagram"></i> @MariaSantos
            </a>
          </p>
        </div>
      </div>

      <!-- Professor Carlos -->
      <div class="professor">
        <img src="../Imagens/treinador 2.jpg" alt="Professor Carlos Oliveira" class="professor-img">
        <div class="descricao">
          <h3>Professor Carlos Oliveira</h3>
          <p>Especialista em técnicas de defesa e estratégias de combate, o Professor Jorge Schmidt dedica-se a formar
            lutadores completos, tanto em habilidades físicas quanto mentais. Ele acredita que o boxe vai além de socos
            e golpes — envolve estratégia, controle e inteligência. Em suas aulas, Jorge enfatiza a importância do
            preparo mental e da disciplina, proporcionando aos alunos uma compreensão profunda e profissional do
            esporte.</p>
            <p>
              <a href="https://www.instagram.com/" class="social-icon professor-instagram">
                <i class="fab fa-instagram"></i> @CarlosOliveira
              </a>
            </p>
        </div>
      </div>

      <!-- Professora Alessandra -->
      <div class="professor">
        <img src="../Imagens/treinadora 2.jpg" alt="Professora Marcia Saraiva" class="professor-img">
        <div class="descricao">
          <h3>Professora Marcia Saraiva</h3>
          <p>Com ampla experiência em artes marciais e uma especialização em defesa pessoal, a Professora Marcia Saraiva
            dedica-se a promover o desenvolvimento físico e mental de seus alunos. Seu estilo de ensino é focado nos
            detalhes e na evolução contínua, buscando garantir que cada aluno atinja todo o seu potencial. Marcia se
            destaca por sua abordagem cuidadosa, oferecendo um ambiente seguro e estimulante para aqueles que buscam
            aprimorar suas habilidades e autoconfiança.</p>
            <p>
              <a href="https://www.instagram.com/" class="social-icon professor-instagram">
                <i class="fab fa-instagram"></i> @Marcia Saraiva
              </a>
            </p>
        </div>
      </div>

    </div>
  </section>

  <!-- Seção do Mapa -->
  <h2 id="tituloP">Venha nos Visitar e conhecer o Espaço</h2>
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
    </div>
    <!--fim da div info-->
    <div class="map-container">
      <div class="frameM">
        <iframe
          src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3453.7963101833193!2d-51.220083804631244!3d-30.042701007070256!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x951978567f17f28d%3A0x2c2c5272bacf4d3a!2sSenac%20Tech!5e0!3m2!1spt-BR!2sbr!4v1718232872653!5m2!1spt-BR!2sbr"
          width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
          referrerpolicy="no-referrer-when-downgrade"></iframe>
      </div>
      <!--fim div frameM-->
    </div>
    <!--fim div map-container-->
  </section>

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