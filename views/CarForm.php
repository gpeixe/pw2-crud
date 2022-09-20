<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Carros</title>
</head>
<body>
    <form action="../controllers/CarController.php" method="post">
        <p>Digite o nome: </p>
        <input type="text" name="name" id="name">
        <p>Digite o marca: </p>
        <input type="text" name="brand" id="brand">
        <p>Digite o ano: </p>
        <input type="text" name="year" id="year">
        <p>Id da pessoa: </p>
        <input type="number" min=1 name="personId" id="personId">
        <button type="submit">Enviar</button>
    </form>
</body>
</html>