<?php
require_once '../banco/conexao.php'; 


if (!isset($_SESSION['usuario_id'])) {
    header("Location: login.php");
    exit();
}


if (!isset($_GET['id']) || empty($_GET['id'])) {
    die("ID do espaço não fornecido!");
}

$id = intval($_GET['id']); 


if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nome = $_POST['nome'];
    $descricao = $_POST['descricao'];
    $foto = $_POST['foto'];

  
    $sql = "UPDATE espaco SET nome = ?, descricao = ?, foto = ? WHERE id = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("sssi", $nome, $descricao, $foto, $id);

    if ($stmt->execute()) {
        echo "<p class='alert alert-success'>Espaço atualizado com sucesso!</p>";
    } else {
        echo "<p class='alert alert-danger'>Erro ao atualizar espaço: " . $stmt->error . "</p>";
    }
    $stmt->close();
}


$sql = "SELECT * FROM espaco WHERE id = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("i", $id);
$stmt->execute();
$result = $stmt->get_result();
$espaco = $result->fetch_assoc();
$stmt->close();


if (!$espaco) {
    die("Espaço não encontrado!");
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Editar Espaço</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container">
        <h1 class="mt-4">Editar Espaço</h1>

        <form method="POST" class="mb-4">
            <div class="mb-3">
                <label for="nome">Nome</label>
                <input type="text" id="nome" name="nome" value="<?php echo htmlspecialchars($espaco['nome']); ?>" class="form-control" required>
            </div>
            <div class="mb-3">
                <label for="descricao">Descrição</label>
                <textarea id="descricao" name="descricao" class="form-control" required><?php echo htmlspecialchars($espaco['descricao']); ?></textarea>
            </div>
            <div class="mb-3">
                <label for="foto">Foto</label>
                <input type="text" id="foto" name="foto" value="<?php echo htmlspecialchars($espaco['foto']); ?>" class="form-control">
            </div>
            <button type="submit" class="btn btn-primary">Salvar Alterações</button>
            <a href="espaco.php?id=<?php echo $espaco['id']; ?>" class="btn btn-secondary">Cancelar</a>
        </form>
    </div>
</body>
</html>
