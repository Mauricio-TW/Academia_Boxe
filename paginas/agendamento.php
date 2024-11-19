<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
  <link rel="stylesheet" href="../CSS/agendamento.css">
  <link rel="stylesheet" href="../CSS/menu.css">
  <meta name="author" content="Mauricio T Welter">
  <title>Senac Boxe</title>
  <link rel="icon" href="../Imagens/logoMini.png" type="Logo">
</head>

<body>

 <!-- cabeçalho -->
 <?php require('header.php'); ?>

  <!-- Seção Agendamento-->
  <div class="container mt-5">
    <h2 class="text-center">Agende Seu Treino Gratuito e Comece Sua Jornada de Melhoramento!</h2>
    <div class="card">
      <div class="card-header bg-gold text-white">
        Agende Aqui o seu treino teste sem custo e comece sua jornada com a gente!
      </div>
      <div class="card-body">
        <p>O treino pode ser marcado sem custos com o objetivo de experimentar. Aproveite também essa oportunidade para
          conhecer nossas instalações e profissionais!</p>
        <form id="formulario-agendamento" action="agendamento.php" method="POST">
          <div class="mb-3">
            <label for="data" class="form-label">Data do Treino:</label>
            <input type="date" id="data" name="data" class="form-control" required>
          </div>
          <div class="mb-3">
            <label for="professor" class="form-label">Professor:</label>
            <select id="professor" name="professor" class="form-select" required>
              <option value="" disabled selected>Selecione o Professor</option>
              <option value="joao">Professor João Silva</option>
              <option value="maria">Professora Maria Santos</option>
              <option value="jorge">Professor Jorge Schmidt</option>
              <option value="marcia">Professora Marcia Saraiva</option>
            </select>
          </div>
          <button type="submit" class="btn btn-gold">Agendar Treino</button>
        </form>
      </div><!--Fim da div card-body-->
    </div><!--Fim da div Card-->
  </div><!--Fim da div container mt-5-->

  <!-- Seção do Mapa -->
  <?php require('mapa.php'); ?>

  <div class="footer-linha-container"></div>

  <!-- footer -->
  <?php require('footer.php'); ?>
</body>

</html>