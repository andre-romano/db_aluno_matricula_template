<?php
include('config/db.php');
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Aluno</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <h1 class="mt-5">Cadastro de Aluno</h1>
        
        <!-- Formulário de Cadastro de Aluno -->
        <form action="aluno.php" method="POST">
            <!-- UTILIZE O CODIGO ABAIXO COMO EXEMPLO PARA CRIAR A TELA  -->
            <div class="mb-3">
                <label for="nome" class="form-label">Nome</label>
                <input type="text" class="form-control" id="nome" name="nome" required>
            </div>
            <button type="submit" class="btn btn-primary">Cadastrar</button>
        </form>

        <hr>

        <!-- Consulta de Alunos -->
        <h2 class="mt-4">Alunos Cadastrados</h2>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Nome</th>
                    <th>Email</th>
                </tr>
            </thead>
            <tbody>
                <?php
                // Inserir alunos
                if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                    // Código para inserir um aluno
                    $nome = $_POST['nome'];
                    $email = $_POST['email'];
                    $sql = "INSERT INTO aluno (nome, email) VALUES (?, ?)";
                    $stmt = $pdo->prepare($sql);
                    $stmt->execute([$nome, $email]);
                }

                // Consultar alunos e criar tabela
                $sql = "CONSULTA SQL AQUI";
                $stmt = $pdo->query($sql);
                while ($aluno = $stmt->fetch(PDO::FETCH_ASSOC)) {
                    echo "<tr><td>" . htmlspecialchars($aluno['nome']) . "</td><td>" . htmlspecialchars($aluno['email']) . "</td></tr>";
                }
                ?>
            </tbody>
        </table>
    </div>

    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
</body>
</html>
