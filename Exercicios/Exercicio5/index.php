<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio5</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header class="cabecalho">
        <h1>Cadastro do calculo do pagamento</h1>
    </header>
    <div class="Formulario">
        <form action="processa.php" method="post">
            <label for="nome">Nome:</label>
            <input type="text" id="nome" name="nome" required>

            <label for="salario">Salário:</label>
            <input type="number" id="salario" name="salario" min="0" required>

            <label for="horasExtras">Horas de Serviço:</label>
            <input type="number" id="horasExtras" name="horasExtras" min="0" required>

            <button type="submit">Calcular Pagamento</button>
        </form>
</body>
</html>