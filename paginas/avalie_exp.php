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

    <!-- Seção Avaliação -->
    <div class="container mt-5">
    <h2 class="text-center">Avalie Sua Experiência!</h2>
    <div class="card">
      <div class="card-body">
        <p>Nos conte o que achou sobre nossos serviços. Sua opinião é muito importante para nós!</p>
        <form id="formulario-avaliacao" action="processa_avaliacao.php" method="POST">
          <div class="mb-3">
            <label for="avaliacao-professor" class="form-label">O que achou do professor?</label>
            <select id="avaliacao-professor" name="avaliacao_professor" class="form-select" required>
              <option value="" disabled selected>Selecione</option>
              <option value="bom">Bom</option>
              <option value="medio">Médio</option>
              <option value="ruim">Ruim</option>
            </select>
          </div>
          <div class="mb-3">
            <label for="avaliacao-aula" class="form-label">O que achou da aula?</label>
            <select id="avaliacao-aula" name="avaliacao_aula" class="form-select" required>
              <option value="" disabled selected>Selecione</option>
              <option value="bom">Bom</option>
              <option value="medio">Médio</option>
              <option value="ruim">Ruim</option>
            </select>
          </div>
          <div class="mb-3">
            <label for="avaliacao-espaco" class="form-label">O que achou do espaço?</label>
            <select id="avaliacao-espaco" name="avaliacao_espaco" class="form-select" required>
              <option value="" disabled selected>Selecione</option>
              <option value="bom">Bom</option>
              <option value="medio">Médio</option>
              <option value="ruim">Ruim</option>
            </select>
          </div>
          <div class="mb-3">
            <label for="sugestao" class="form-label">Caso tenha alguma sugestão:</label>
            <textarea id="sugestao" name="sugestao" class="form-control" rows="4" placeholder="Escreva aqui..."></textarea>
          </div>
          <button type="submit" class="btn btn-gold">Enviar Avaliação</button>
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