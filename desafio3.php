<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Números de 500 a 1000</title>
</head>
<body>
    <h1>Números Ímpares de 500 a 1000</h1>
    <ul>
        <?php
        for ($i = 501; $i <= 999; $i += 2) {
            echo "<li>$i</li>";
        }
        ?>
    </ul>
</body>
</html>
