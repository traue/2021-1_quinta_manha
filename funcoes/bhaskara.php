<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício de Bhaskara com funções</title>
</head>
<body>
<!-- 
    //DESAFIO: IMPLEMENTAR UMA PEQUENA CALCULADORA 
	//DE BHASKARA! USANDO FUNCTIONS!
    //Equção quadrática: ax2 + bx + c = 0
	//DELTA = bˆ2 - 4 * a * c
	//X+ = [-b + raiz(DELTA)] / (2*a)
	//X- = [-b - raiz(DELTA)] / (2*a) 
-->
    <?php

        $a = 2;
        $b = 12;
        $c = -13;

        function calculaDelta($a, $b, $c) {
            $delta = ($b * $b) - 4 * $a * $c;
            return $delta;
        }

        function 🔺($a, $b, $c) {
            $🔺 = ($b * $b) - 4 * $a * $c;
            return $🔺;
        }

        function calculaRaizPositiva($a, $b, $delta) {
            $rP = ((-1 * $b) + sqrt($delta)) / (2 * $a);
            return $rP;
        }

        function calculaRaizNegativa($a, $b, $delta) {
            $rP = ((-1 * $b) - sqrt($delta)) / (2 * $a);
            return $rP;
        }
    ?>

    <h2>Calculando Bhaskara</h2>
    <hr>
    <strong>Equação de entrada: </strong><?= "$a x² + $b x + $c = 0" ?>
    <br>
    <strong>Delta = </strong><?= number_format(calculaDelta($a, $b, $c), 2, ',') ?>
    <br>
    <strong>X+ = </strong><?= number_format(calculaRaizPositiva($a, $b, calculaDelta($a, $b, $c)), 2, ",") ?>
    <br>
    <strong>X- = </strong><?= number_format(calculaRaizNegativa($a, $b, calculaDelta($a, $b, $c)), 2, ",") ?>
</body>
</html>