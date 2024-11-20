<?php
require_once '../banco/conexao.php';
session_start();


if (!isset($_SESSION['usuario_id'])) {
    die("Acesso negado. Por favor, faça login para continuar.");
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  
    $data = $_POST['data'];
    $professor_id = $_POST['professor'];

    
    $sqlProfessor = "SELECT id FROM professores WHERE id = ?";
    $stmtProfessor = $conn->prepare($sqlProfessor);
    $stmtProfessor->bind_param("i", $professor_id);
    $stmtProfessor->execute();
    $stmtProfessor->store_result();

  
    if ($stmtProfessor->num_rows === 0) {
        echo "<p class='alert alert-danger'>Professor não encontrado. Por favor, selecione um professor válido.</p>";
    } else {
       
        if (empty($data) || empty($professor_id)) {
            echo "<p class='alert alert-danger'>Por favor, preencha todos os campos.</p>";
        } else {
            
            $sql = "INSERT INTO agendamentos (usuario_id, professor_id, data_agendamento, duracao, status) 
                    VALUES (?, ?, ?, 60, 'pendente')"; 

            $stmt = $conn->prepare($sql);
            $stmt->bind_param("iis", $_SESSION['usuario_id'], $professor_id, $data);

            if ($stmt->execute()) {
                echo "<p class='alert alert-success'>Agendamento feito com sucesso!</p>";
            } else {
                echo "<p class='alert alert-danger'>Erro ao agendar: " . $stmt->error . "</p>";
            }
            $stmt->close();

           
            header("Location: agendamento.php");
            exit();
        }
    }
    $stmtProfessor->close();
}
?>

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
            <input type="datetime-local" id="data" name="data" class="form-control" required>
          </div>
          <div class="mb-3">
            <label for="professor" class="form-label">Professor:</label>
            <select id="professor" name="professor" class="form-select" required>
              <option value="" disabled selected>Selecione o Professor</option>
              <option value="9">Professor João Silva</option>
              <option value="10">Professora Maria Santos</option>
              <option value="11">Professor Carlos Oliveira</option>
              <option value="12">Professora Marcia Saraiva</option>
            </select>
          </div>
          <button type="submit" class="btn btn-gold">Agendar Treino</button>
        </form>
      </div><!--Fim da div card-body-->
    </div><!--Fim da div Card-->
  </div><!--Fim da div container mt-5-->

  <!-- Seção de Opinião -->
  <div class="container mt-5">
    <h3 class="text-center">Deixe Sua Opinião</h3>
    <div class="card">
      <div class="card-body">
        <p>Nos conte o que achou ou compartilhe suas sugestões. Sua opinião é muito importante para nós!</p>
        <form id="formulario-opiniao" action="#" method="POST">
          <div class="mb-3">
            <label for="opiniao" class="form-label">Sua Opinião:</label>
            <textarea id="opiniao" name="opiniao" class="form-control" rows="4" placeholder="Escreva aqui..."
              required></textarea>
          </div>
          <button type="submit" class="btn btn-gold">Publicar</button>
        </form>
      </div>
    </div>
  </div>

  <!-- Seção do Mapa -->
  <?php require('mapa.php'); ?>

  <div class="footer-linha-container"></div>

  <!-- footer -->
  <?php require('footer.php'); ?>
</body>

</html>