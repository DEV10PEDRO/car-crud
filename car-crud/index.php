<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD de Cell</title>
    <link rel="stylesheet" href="estilo.css">
</head>
<body>
    <h1>CRUD de Cell</h1>
    <form action="pesquisa_cell.php" method="POST">
        <label for="marca">Marca:</label>
        <input type="text" id="marca" name="marca" required><br><br>
        
        <label for="modelo">Modelo:</label>
        <input type="text" id="modelo" name="modelo" required><br><br>
        
        <input type="submit" value="Pesquisa Cell">
    </form>
    <h2>Pesquisa de Cell</h2>
    <div id="pesquisa-cell">
        <?php include 'pesquisa_cell.php'; ?>
    </div>
</body>
</html>
