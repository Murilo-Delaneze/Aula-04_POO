<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio4</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header class="cabecalho">
        <h1>Devolução de Livros</h1>
    </header>
    <div class="Formulario">
        <form action="processa.php" method="post">
            <label for="nome">Nome:</label>
            <input type="text" id="nome" name="nome" required>

            <label for="tituloLivro">Título do Livro:</label>
            <input type="text" id="tituloLivro" name="tituloLivro" required>

            <label for="diasAtraso">Dias de Atraso:</label>
            <input type="number" id="diasAtraso" name="diasAtraso" min="0" required>

            <button type="submit">Calcular Multa</button>
        </form>
    </div>
</body>
</html>