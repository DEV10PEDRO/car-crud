<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD de Cell</title>
    <link rel="stylesheet" href="estilo.css">
</head>
<body>
    <div class= "container">
    <h1>Elite Cell</h1>
    <form action="pesquisa_cell.php" method="POST">
        <label for="marca">Marca:</label>
        <input type="text" id="marca" name="marca" required><br><br>
        
        <label for="modelo">Modelo:</label>
        <input type="text" id="modelo" name="modelo" required><br><br>

        <label for="codigo">Código:</label>
        <input type="text" id="codigo" name="codigo" required><br><br>
        
        <input type="submit" value="Cadastrar">
    </form>
    </div>
    <h2>Estoque</h2>
    <div id="lista-cell">
        <?php include 'listar_cell.php'; ?>
    </div>
</body>
</html>
