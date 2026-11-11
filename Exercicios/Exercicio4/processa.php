<?php

require_once 'EmprestimoLivros.php';

$nome = $_POST['nome'];
$tituloLivro = $_POST['tituloLivro'];
$diasAtraso = $_POST['diasAtraso'];

$emprestimo = new EmprestimoLivros($nome, $tituloLivro, $diasAtraso);
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exibição de Resultados</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header class="cabecalho">
        <h1>Resultado da Devolução de Livros</h1>
    </header>
    <main class="resultado">
        <table>
            <tr>
                <th>Nome</th>
                <td><?= $emprestimo->getNome(); ?></td>
            </tr>
            <tr>
                <th>Título do Livro</th>
                <td><?= $emprestimo->getTituloLivro(); ?></td>
            </tr>
            <tr>
                <th>Dias de Atraso</th>
                <td><?= $emprestimo->getDiasAtraso(); ?></td>
            </tr>
            <tr>
                <th>Multa Total</th>
                <td>R$ <?= number_format($emprestimo->calcularMulta(), 2, ',', '.'); ?></td>
            </tr>
        </table>
    </main>
</body>
</html>