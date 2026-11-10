<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema de Locação de Bicicleta</title>
</head>
<body>
    <header>
        <h1>Sistema de Locação de Bicicleta</h1>
    </header>
    <main>
        <form action="processa.php" method="POST">
            <label for="nome">Nome do Cliente</label>
            <input type="text" id="nome" name="nome" required>

            <label for="tipoBike">Tipo de Bicicleta</label>
            <select name="tipoBike" id="tipobike">
                <option value="Comum">Comum</option>
                <option value="Eletrica">Elétrica</option>
            </select>

            <label for="qtdlocacao">Quantidade de hora Locada</label>
            <input type="number" id="qtdlocacao" name="qtdlocacao">

            <button type="submit">Enviar</button>
        </form>
    </main>
</body>
</html>