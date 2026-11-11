<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio3</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header class="cabecalho">
        <h1>Calculadora de Valor de Estadia</h1>
    </header>
    <div class="Formulario">
        <form action="processa.php" method="post">
            <label for="nome">Nome:</label>
            <input type="text" id="nome" name="nome" required>

            <label for="tipoQuarto">Tipo de Quarto:</label>
            <select id="tipoQuarto" name="tipoQuarto" required>
                <option value="simples">Quarto standart</option>
                <option value="CafeDaManha">Café da Manha</option>
                <option value="suite">Suite</option>
            </select>

            <label for="quantidadeDiarias">Quantidade de Diárias:</label>
            <input type="number" id="quantidadeDiarias" name="quantidadeDiarias" min="1" required>

            <button type="submit">Calcular Valor</button>
        </form>
    </div>
</body>
</html>