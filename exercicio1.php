<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    

<form method="post">
    Digite um número: <input type="number" name="numero" required>
    <input type="submit" value="Calcular">
</form>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $numero = $_POST["numero"];

    $antecessor = $numero - 1;
    $sucessor = $numero + 1;

    echo "<p>Você digitou: <strong>$numero</strong></p>";
    echo "<p>Antecessor: <strong>$antecessor</strong></p>";
    echo "<p>Sucessor: <strong>$sucessor</strong></p>";
}
?>


</body>
</html>








