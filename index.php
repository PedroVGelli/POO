<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD de Carros</title>
    <link rel="stylesheet" href="estilo.css">
</head>
<body>
    <h1>Celulares do Pedrinho</h1>
    <form action="adicionar.php" method="POST">
        <label for="marca">Marca:</label>
        <input type="text" id="marca" name="marca" required><br><br>
        
        <label for="fabricante">Fabricante:</label>
        <input type="text" id="fabricante" name="fabricante" required><br><br>
        
        <label for="tipodecarregador">Tipo de carregador</label>
        <input type="text" id="tipodecarregador" name="tipodecarregador" required><br><br>
        
    
        
        <input type="submit" value="Adicionar Celular">
    </form>
    <h2>Lista de Celulares</h2>
    <div id="lista-celulares">
        <?php include 'listacell.php'; ?>
    </div>
</body>
</html>