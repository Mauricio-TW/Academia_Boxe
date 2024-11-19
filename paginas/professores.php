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

  <!-- cabeçalho -->
  <?php require('header.php'); ?>

  <!-- carousel -->
  <?php require('carousel.php'); ?>

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
  <?php require('mapa.php'); ?>

  <div class="footer-linha-container"></div>

  <!-- footer -->
  <?php require('footer.php'); ?>

</body>

</html>