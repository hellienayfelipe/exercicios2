<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<form method="post">Sortear
<input type="submit" name="sortear" value="Sortear numero">
</form>


<?php

if(isset($_POST['sortear'])) {
    $numeroSorteado = rand(1, 100);
    echo "Numero sorteado: $numeroSorteado";
}
?> 
</body>
</html>