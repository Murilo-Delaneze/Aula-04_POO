<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 01</title>
</head>
<body>
    <header>
        <h1>Sistema de Estacionamento</h1>
    </header>
    <main>
        <form action="processa.php" method="POST">
            <label for="placa">Placa do veículo</label>
            <input type="text" id="placa" name="placa" required>

            <label for="tipoveiculo">Tipo de veículo</label>
            <select name="tipoVeiculo" id="tipoveiculo" required>
                <option value="Carro">Carro</option>
                <option value="Moto">Moto</option>
            </select>

            <label for="qtdhoras">Quantidade de horas estacionadas</label>
            <input type="number" id="qtdhoras" name="qtdhoras" required>

            <button type="submit">Enviar</button>
        </form>
    </main>
</body>
</html>