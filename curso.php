<?php
include('config/db.php');
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Curso</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <h1 class="mt-5">Cadastro de Curso</h1>

        <!-- Formulário de Cadastro de Curso -->
        <form action="curso.php" method="POST">
            <!-- UTILIZE O CODIGO ABAIXO COMO EXEMPLO PARA CRIAR A TELA  -->
            <div class="mb-3">
                <label for="nome" class="form-label">Nome do Curso</label>
                <input type="text" class="form-control" id="nome" name="nome" required>
            </div>
            <button type="submit" class="btn btn-primary">Cadastrar</button>
        </form>

        <hr>

        <!-- Consulta de Cursos -->
        <h2 class="mt-4">Cursos Cadastrados</h2>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Nome do Curso</th>
                </tr>
            </thead>
            <tbody>
                <?php
                // Consultar todos os cursos
                if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                    // Código para inserir um curso
                    $nome = $_POST['nome'];
                    $sql = "INSERT INTO curso (nome) VALUES (?)";
                    $stmt = $pdo->prepare($sql);
                    $stmt->execute([$nome]);
                }

                // Consultar cursos
                $sql = "SELECT * FROM curso";
                $stmt = $pdo->query($sql);
                while ($curso = $stmt->fetch(PDO::FETCH_ASSOC)) {
                    echo "<tr><td>" . htmlspecialchars($curso['nome']) . "</td></tr>";
                }
                ?>
            </tbody>
        </table>
    </div>

    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
</body>
</html>
