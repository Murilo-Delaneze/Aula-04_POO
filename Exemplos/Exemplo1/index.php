<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Cadastro de Produtos</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header class="cabecalho">
        <h1>Cadastro de Produtos</h1>
    </header>

    <div class="formulario">
        <form action="processa.php" method="POST">
            <label>Nome do Produto:</label>
            <input type="text" name="nome" required />
            
            <br>

            <label>Preço:</label>
            <input type="number" name="preco" min="1" required/>

            <br>

            <label>Quantidade:</label>
            <input type="number" name="quantidade" min="1" required/>

            <br>
            <button type="submit">Cadastrar Produto</button>
        </form>
    </div>
</body>
</html>