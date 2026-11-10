<?php
require_once 'estacionamento.php';

if (!$_POST['placa'] || !$_POST['tipoVeiculo'] || !$_POST['qtdhoras']){
    exit('Dados Incorretos!');
}

$veiculo1 = new Estacionamento($_POST['placa'], $_POST['tipoVeiculo'], (int)$_POST['qtdhoras']);
?>

<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Veículos Cadastrados</title>
    </head>
    <body>
        <header>
            <h1>Informações</h1>
        </header>
        <table>
            <thead>
                <tr>
                    <th>Informações</th>
                    <th>Valor</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Placa</td>
                    <td><?=$veiculo1->GetPlaca()?></td>
                </tr>
                <tr>
                    <td>Tipo</td>
                    <td><?=$veiculo1->GetTipoVeiculo()?></td>
                </tr>
                <tr>
                    <td>Horas Estacionadas</td>
                    <td><?=$veiculo1->GetHoras()?></td>
                </tr>
                <tr>
                    <td>Valor para Pagar</td>
                    <td><?=$veiculo1->calcularValor()?></td>
                </tr>
            </tbody>
        </table>
        <a href="index.php">Voltar para Index.php</a>
    </body>
</html>