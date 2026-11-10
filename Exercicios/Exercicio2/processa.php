<?php
require_once 'bicicleta.php';

if (!$_POST['nome'] || !$_POST['tipoBike'] || !$_POST['qtdlocacao']){
    exit('Dados Incorretos!');
}

$bicicleta1 = new LocacaoBicicleta($_POST['nome'], $_POST['tipoBike'], (int)$_POST['qtdlocacao']);
?>

<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Informações</title>
    </head>
    <body>
        <header>
            <h1>Informações</h1>
        </header>
        <main>
            <table>
                <thead>
                    <tr>
                        <th>Informações</th>
                        <th>Valor</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Nome do Locador</td>
                        <td><?=$bicicleta1->GetNome()?></td>
                    </tr>
                    <tr>
                        <td>Tipo da Bicicleta</td>
                        <td><?=$bicicleta1->GetTipoBike()?></td>
                    </tr>
                    <tr>
                        <td>Horas Locadas</td>
                        <td><?=$bicicleta1->Gethoras()?></td>
                    </tr>
                    <tr>
                        <td>Valor Bruto</td>
                        <td>R$<?=$bicicleta1->calcularValorBruto()?></td>
                    </tr>
                    <tr>
                        <td>Valor do Desconto</td>
                        <td>R$<?=$bicicleta1->calcularDesconto()?></td>
                    </tr>
                    <tr>
                        <td>Valor Final</td>
                        <td>R$<?=$bicicleta1->calcularTotal()?></td>
                    </tr>
                </tbody>
            </table>
        </main>
    </body>
</html>