<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Números de 100 a 200</title>
</head>
<body>
    <h1>Números Inteiros de 100 a 200</h1>
    <h2>Com Incremento de 2 em 2</h2>
    <ul>
        <?php
        for ($i = 100; $i <= 200; $i += 2) {
            echo "<li>$i</li>";
        }
        ?>
    </ul>
</body>
</html>

