<?php
require_once '../banco/conexao.php';
session_start();


if (!isset($_SESSION['usuario_id'])) {
    header("Location: login.php");
    exit();
}
if (isset($_GET['excluir'])) {
    $agendamento_id = $_GET['excluir'];

    $sqlDelete = "DELETE FROM agendamentos WHERE id = ?";
    $stmt = $conn->prepare($sqlDelete);
    $stmt->bind_param("i", $agendamento_id);
    if ($stmt->execute()) {
        header("Location: editar-agendamentos.php?sucesso=1");
        exit();
    } else {
        header("Location: editar-agendamentos.php?erro=1");
        exit();
    }
}

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['id'])) {
    $agendamento_id = $_POST['id'];
    $data_agendamento = $_POST['data'];
    $status = $_POST['status'];

    if (empty($data_agendamento) || empty($status)) {
        echo "<p class='alert alert-danger'>Por favor, preencha todos os campos.</p>";
    } else {

        $sqlUpdate = "UPDATE agendamentos SET data_agendamento = ?, status = ? WHERE id = ?";
        $stmtUpdate = $conn->prepare($sqlUpdate);
        $stmtUpdate->bind_param("ssi", $data_agendamento, $status, $agendamento_id);

        if ($stmtUpdate->execute()) {
            echo "<p class='alert alert-success'>Agendamento atualizado com sucesso!</p>";
            header("Location: editar-agendamentos.php?sucesso=1");
            exit();
        } else {
            echo "<p class='alert alert-danger'>Erro ao atualizar o agendamento.</p>";
        }

        $stmtUpdate->close();
    }
}


$sql = "SELECT a.id, a.data_agendamento, a.status, p.nome AS professor
        FROM agendamentos a
        JOIN professores p ON a.professor_id = p.id";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../CSS/administrativo.css">
    <link rel="stylesheet" href="../CSS/menu.css">
    <link rel="stylesheet" href="../CSS/editar-agendamentos.css">
    <title>Editar Agendamentos</title>
</head>

<body>

    <header>

        <div id="nav">
            <input type="checkbox" id="bt_menu" />
            <label for="bt_menu">&#9776;</label>
            <nav id="menu">
                <img src="../Imagens/boxeLogo.png" alt="Logo" class="logo">
                <ul>
                    <li><a href="index.php">Início</a></li>
                    <li><a href="agendamento.php">Agendamento</a></li>
                    <li><a href="professores.php">Professores</a></li>
                    <li><a href="espaco.php">Espaço</a></li>
                    <li><a href="compras.php">Loja</a></li>
                    <li><a href="administrativo.php">Administrativo</a></li>
                    <li><a href="logout.php">Sair</a></li>
                </ul>
                <a href="login.php" class="login-icon"><i class="fas fa-user"></i></a>
            </nav>
        </div>
    </header>

    <main class="container">
        <h1 class="mt-4">Editar Agendamentos</h1>
        <?php
        if (isset($_GET['sucesso'])) {
            echo "<p class='alert alert-success'>Agendamento excluído com sucesso!</p>";
        }
        if (isset($_GET['erro'])) {
            echo "<p class='alert alert-danger'>Erro ao excluir o agendamento.</p>";
        }
        ?>

        <table class="table table-striped">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Data do Agendamento</th>
                    <th>Professor</th>
                    <th>Status</th>
                    <th>Ações</th>
                </tr>
            </thead>
            <tbody>
                <?php while ($agendamento = $result->fetch_assoc()): ?>
                    <tr>
                        <td><?php echo $agendamento['id']; ?></td>
                        <td><?php echo date('d/m/Y H:i', strtotime($agendamento['data_agendamento'])); ?></td>
                        <td><?php echo $agendamento['professor']; ?></td>
                        <td><?php echo ucfirst($agendamento['status']); ?></td>
                        <td>
                            <a href="editar-agendamentos.php?id=<?php echo $agendamento['id']; ?>" class="btn btn-warning">Editar</a>
                            <a href="editar-agendamentos.php?excluir=<?php echo $agendamento['id']; ?>" class="btn btn-danger" onclick="return confirm('Tem certeza que deseja excluir este agendamento?')">Excluir</a>
                        </td>
                    </tr>
                <?php endwhile; ?>
            </tbody>
        </table>


        <?php if (isset($_GET['id'])): ?>
            <?php
            $agendamento_id = $_GET['id'];


            $sqlEdit = "SELECT a.id, a.data_agendamento, a.status, a.professor_id, p.nome AS professor
                        FROM agendamentos a
                        JOIN professores p ON a.professor_id = p.id
                        WHERE a.id = ?";
            $stmt = $conn->prepare($sqlEdit);
            $stmt->bind_param("i", $agendamento_id);
            $stmt->execute();
            $resultEdit = $stmt->get_result();
            $agendamento = $resultEdit->fetch_assoc();
            ?>

            <h2>Editar Agendamento</h2>
            <form action="editar-agendamentos.php" method="POST">
                <input type="hidden" name="id" value="<?php echo $agendamento['id']; ?>">
                <div class="mb-3">
                    <label for="data" class="form-label">Data do Agendamento:</label>
                    <input type="datetime-local" id="data" name="data" class="form-control" value="<?php echo date('Y-m-d\TH:i', strtotime($agendamento['data_agendamento'])); ?>" required>
                </div>
                <div class="mb-3">
                    <label for="status" class="form-label">Status:</label>
                    <select id="status" name="status" class="form-select" required>
                        <option value="pendente" <?php echo ($agendamento['status'] == 'pendente') ? 'selected' : ''; ?>>Pendente</option>
                        <option value="confirmado" <?php echo ($agendamento['status'] == 'confirmado') ? 'selected' : ''; ?>>Confirmado</option>
                        <option value="cancelado" <?php echo ($agendamento['status'] == 'cancelado') ? 'selected' : ''; ?>>Cancelado</option>
                    </select>
                </div>
                <button type="submit" class="btn btn-primary">Atualizar Agendamento</button>
            </form>
        <?php endif; ?>
    </main>

    <!-- Footer -->
    <?php require('footer.php'); ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>