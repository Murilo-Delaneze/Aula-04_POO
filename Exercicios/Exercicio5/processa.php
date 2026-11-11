<?php

require_once 'Vendedor.php';

$nome = $_POST['nome'];
$salarioBase = $_POST['salario'];
$totalVendas = $_POST['horasExtras'];

$vendedor = new Vendedor($nome, $salarioBase, $totalVendas);
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculo de Salário</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header class="cabecalho">
        <h1>Calculo de Salário</h1>
    </header>
    <main class="resultado">
        <table>
            <tr>
                <th>Nome</th>
                <td><?php echo $vendedor->getNome(); ?></td>
            </tr>
            <tr>
                <th>Salário Base</th>
                <td>R$ <?php echo number_format($vendedor->getSalarioBase(), 2, ',', '.'); ?></td>
            </tr>
            <tr>
                <th>Total de Vendas</th>
                <td>R$ <?php echo number_format($vendedor->getTotalVendas(), 2, ',', '.'); ?></td>
            </tr>
            <tr>
                <th>Comissão</th>
                <td>R$ <?php echo number_format($vendedor->calcularComissao(), 2, ',', '.'); ?></td>
            </tr>
            <tr>
                <th>Bônus</th>
                <td>R$ <?php echo number_format($vendedor->calculoDeBonus(), 2, ',', '.'); ?></td>
            </tr>
            <tr>
                <th>Salário Final</th>
                <td>R$ <?php echo number_format($vendedor->calcularSalarioFinal(), 2, ',', '.'); ?></td>
            </tr>
        </table>
    </main>
</body>
</html>