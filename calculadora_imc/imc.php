<?php 
    include("calc_imc.php");

    $altura = $_POST["altura"];
    $peso = $_POST["peso"];

    $imc = calculaIMC($peso, $altura);
    $classificacao = classificaIMC($imc);
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora IMC</title>
</head>
<body>
    <h1>Calculadora IMC</h1>
    <hr>
    <strong>Resultados</strong>
    <ul>
      <li><strong>Peso informado: </strong><?= $peso ?></li>
      <li><strong>Altura informada: </strong><?= number_format($altura, 2, ',' , '') ?></li>
      <li><strong>IMC: </strong><?= number_format($imc, 2, ',', '')  ?></li>    
      <li><strong>Classificação: </strong><?= $classificacao  ?></li>    
    </ul>
    <br><br>
    <a href="index.html">Calcular novamente</a>
</body>
</html>