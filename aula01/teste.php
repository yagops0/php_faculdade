<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 1</title>
</head>
<body>
    <h1>AULA DE PHP</h1>

    <br>

    <?php 
        echo "<h2> Agora estou testando PHP <br>";
        $nome = "Adriana Belon";
        $idade = "24";

        echo "Bem vinda $nome <br>";
        echo 'Bem vinda ' .$nome. '<br>';

        $n1 = 1250.80;
        $n2 = 1230.55;

        $soma = $n1 + $n2;
        echo $soma. "<br>";

        echo "<font color=blue>". "R$ ".  number_format($soma, 2, /*Casa de milhar*/'.', '.'). "</font>";
    ?>
</body>
</html>