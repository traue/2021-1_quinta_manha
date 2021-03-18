<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Funções em PHP</title>
</head>
<body>
    <?php

        function darBoasVindas() {
            echo "Seja bem-vindo(a) :) <br>";
        }

        function calculaAreaTriangulo($base, $altura) {
            //área do triângulo = (base * altura) / 2
            $area = ($base * $altura) / 2;
            return $area;
        }

        function rubens() {
            $variavel = 123;
            return $variavel;
        }

        darBoasVindas();
        echo "A área é: " . calculaAreaTriangulo(4, 8) . "<br>";
        print(rubens());
    ?>
</body>
</html>