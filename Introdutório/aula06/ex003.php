<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 03</title>
    <link rel="stylesheet" href="../Estilo/estilo.css">
</head>
<body>
    <div>
    <?php
    $a = 3;
    $b = &$a;
    $b += 5;
    echo "A variável A vale $a <br />";
    echo "A variável B vale $b";
    ?>
    </div>
</body>
</html>