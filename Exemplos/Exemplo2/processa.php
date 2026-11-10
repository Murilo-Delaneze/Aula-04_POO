<?php

require_once "Aluno.php";

// Recebendo informações
$nome = trim($_POST["nome"] ?? "");
$nota1 = $_POST["nota1"] ?? "";
$nota2 = $_POST["nota2"] ?? "";

// Validando as informações
if (!$nome || !$nota1 || !$nota2){
    exit("Dados inválidos. Volte ao formulário.");
}

// Instanciando o aluno
$aluno = new Aluno(
    $nome,
    (float) $nota1,
    (float) $nota2
);
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Boletim Escolar</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header class="cabecalho">
        <h1>Boletim Escolar</h1>
    </header>

    <main class="resultado">
        <h2>Informações do Aluno</h2>

        <table>
            <thead>
                <tr>
                    <th>Informação</th>
                    <th>Valor</th>
                </tr>
            </thead>

            <tbody>
                <tr>
                    <td>Nome do Aluno</td>
                    <td>
                        <?= $aluno->getNome() ?>
                    </td>
                </tr>
                <tr>
                    <td>Nota 1</td>
                    <td>
                        <?= number_format(
                            $aluno->getNota1(), 1, ',', '.'
                        ) ?>
                    </td>
                </tr>
                <tr>
                    <td>Nota 2</td>
                    <td>
                        <?= number_format(
                            $aluno->getNota2(), 1, ',', '.'
                        ) ?>
                    </td>
                </tr>
                <tr>
                    <td>Média Final</td>
                    <td>
                        <?= number_format(
                            $aluno->calcularMedia(), 1, ',', '.'
                        ) ?>
                    </td>
                </tr>
                <tr>
                    <td>Situação</td>
                    <td>
                        <?= $aluno->verificarSituacao() ?>
                    </td>
                </tr>
            </tbody>
        </table>

        <a href="index.php">Voltar ao Cadastro</a>
    </main>
</body>
</html>
