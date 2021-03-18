<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Funções com Strings</title>
</head>
<body>
    <?php
        $texto = "ciênCia da ComPuTaÇÃO";

        echo "Texto de entrada: " . $texto . "<br>";
        echo "<hr>";

        //Colocar tudo em caixa alta:
        echo "Texto em caixa alta: ";
        echo mb_strtoupper($texto, 'UTF-8');
        
        echo "<br>";
        echo "<hr>";

        //Colocar tudo em caixa baixa:
        echo "Texto em caixa baixa: ";
        echo mb_strtolower($texto, 'UTF-8');

        echo "<br>";
        echo "<hr>";

        //Colocar a primeira letra em caixa alta:
        echo "Texto com a primeira letra em caixa alta: ";
        echo ucfirst($texto);
        echo "<br>";
    ?>
</body>
</html>