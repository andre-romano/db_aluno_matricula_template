<?php
include('config/db.php');
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Matrícula</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <h1 class="mt-5">Cadastro de Matrícula</h1>

        <!-- Formulário de Matrícula -->
        <form action="matricula.php" method="POST">
            <div class="mb-3">
                <label for="aluno_id" class="form-label">Aluno</label>
                <select class="form-control" id="aluno_id" name="aluno_id" required>
                    <?php
                    // Consultar todos os alunos para preencher o dropdown
                    ?>
                </select>
            </div>
            <div class="mb-3">
                <label for="curso_id" class="form-label">Curso</label>
                <select class="form-control" id="curso_id" name="curso_id" required>
                    <?php
                    // Consultar todos os cursos para preencher o dropdown
                    ?>
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Matricular</button>
        </form>

        <hr>

        <!-- Consulta de Matrículas -->
        <h2 class="mt-4">Matrículas Cadastradas</h2>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Aluno</th>
                    <th>Curso</th>
                </tr>
            </thead>
            <tbody>
                <?php
                // Consultar todas as matrículas
                ?>
            </tbody>
        </table>
    </div>

    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
</body>
</html>
