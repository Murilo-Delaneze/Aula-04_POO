<?php

require_once "Produto.php";

$nome = $_POST["nome"];
$preco = $_POST["preco"];
$quantidade = $_POST["quantidade"];

// Validação dados
if(!$nome || !$preco || !$quantidade){
    exit("Dados inválidos. Volte ao formulário.");
}

// Criando objeto
$produto = new Produto(
    $nome,
    (float) $preco,
    (int) $quantidade
);
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Produto Cadastrado</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header class="cabecalho">
        <h1>Produto Cadastrado</h1>
    </header>

    <main class="resultado">
        <h2>Informações do Produto</h2>

        <table>
            <thead>
                <tr>
                    <th>Informação</th>
                    <th>Valor</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Nome do Produto</td>
                    <td>
                        <?= $produto->getNome() ?>
                    </td>
                </tr>
                <tr>
                    <td>Preço Unitário</td>
                    <td>
                        R$ <?= number_format(
                            $produto->getPreco(), 2, ",", "."
                        ) ?>
                    </td>
                </tr>
                <tr>
                    <td>Quantidade</td>
                    <td>
                        <?= $produto->getQuantidade() ?>
                    </td>
                </tr>
                <tr>
                    <td>Valor Total</td>
                    <td>
                        R$ <?= number_format(
                            $produto->calcularTotal(), 2, ",", "."
                        ) ?>
                    </td>
                </tr>
            </tbody>
        </table>

        <a href="index.php">Voltar ao Cadastro</a>
    </main>
</body>
</html>
