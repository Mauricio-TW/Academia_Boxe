<?php
require_once '../banco/conexao.php'; 
session_start();

if (!isset($_SESSION['usuario_id'])) {
    header("Location: login.php");
    exit();
}


if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $id = $_POST['id'];
    $nome = $_POST['nome'];
    $especialidade = $_POST['especialidade'];
    $descricao = $_POST['descricao'];

    $sql = "UPDATE professores SET nome = ?, especialidade = ?, descricao = ? WHERE id = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("sssi", $nome, $especialidade, $descricao, $id);

    if ($stmt->execute()) {
        echo "<p class='alert alert-success'>Professor atualizado com sucesso!</p>";
    } else {
        echo "<p class='alert alert-danger'>Erro ao atualizar professor: " . $stmt->error . "</p>";
    }
    $stmt->close();
}


$sql = "SELECT * FROM professores";
$result = $conn->query($sql);
$professores = $result->fetch_all(MYSQLI_ASSOC);
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Editar Professores</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container">
        <h1 class="mt-4">Editar Professores</h1>
        <?php foreach ($professores as $professor): ?>
        <form method="POST" class="mb-4">
            <input type="hidden" name="id" value="<?php echo $professor['id']; ?>">
            <div class="mb-3">
                <label for="nome-<?php echo $professor['id']; ?>">Nome</label>
                <input type="text" id="nome-<?php echo $professor['id']; ?>" name="nome" value="<?php echo $professor['nome']; ?>" class="form-control">
            </div>
            <div class="mb-3">
                <label for="especialidade-<?php echo $professor['id']; ?>">Especialidade</label>
                <input type="text" id="especialidade-<?php echo $professor['id']; ?>" name="especialidade" value="<?php echo $professor['especialidade']; ?>" class="form-control">
            </div>
            <div class="mb-3">
                <label for="descricao-<?php echo $professor['id']; ?>">Descrição</label>
                <textarea id="descricao-<?php echo $professor['id']; ?>" name="descricao" class="form-control"><?php echo $professor['descricao']; ?></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Salvar</button>
        </form>
        <?php endforeach; ?>
    </div>

    
</body>
</html>
