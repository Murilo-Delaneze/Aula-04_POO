<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Boletim Escolar</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header class="cabecalho">
        <h1>Boletim Escolar</h1>
    </header>

    <div class="formulario">
        <form action="processa.php" method="POST">
            <label>Nome do Aluno:</label>
            <input type="text" name="nome" required />
            
            <br>

            <label>Primeira Nota:</label>
            <input type="number" name="nota1" required/>

            <br>

            <label>Segunda Nota:</label>
            <input type="number" name="nota2" required/>

            <br>
            <button type="submit">Calcular Média</button>
        </form>
    </div>
</body>
</html>