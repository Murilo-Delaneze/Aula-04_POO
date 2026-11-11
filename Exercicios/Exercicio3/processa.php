<?php
require_once 'ReserHotel.php';

$nome = $_POST['nome'];
$tipoQuarto = $_POST['tipoQuarto'];
$quantidadeDiarias = $_POST['quantidadeDiarias'];

$reserva = new ReservaHotel($nome, $tipoQuarto, $quantidadeDiarias);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reserva de Hotel</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header class="cabecalho">
        <h1>Reserva de Hotel</h1>
    </header>
    <main class="resultado">
        <table>
            <tr>
                <th>Nome</th>
                <td><?= $reserva->getNome(); ?></td>
            </tr>
            <tr>
                <th>Tipo de Quarto</th>
                <td><?= $reserva->getTipoQuarto(); ?></td>
            </tr>
            <tr>
                <th>Quantidade de Diárias</th>
                <td><?= $reserva->getQuantidadeDeDiarias(); ?></td>
            </tr>
            <tr>
                <th>Valor Total</th>
                <td>R$ <?= number_format($reserva->calcularValorTotal(), 2, ',', '.'); ?></td>
            </tr>
        </table>
    </main>
</body>
</html>