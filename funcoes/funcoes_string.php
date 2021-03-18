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
        $altura = 1.835345353535;

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
        echo "<hr>";

        //Contagem de caracteres:
        echo "O texto tem tamanho: ";
        echo mb_strlen($texto, 'UTF-8');

        echo "<br>";
        echo "<hr>";

        //Imprimindo um número:
        echo "Minha altura é: ";
        echo str_replace('.', ',', $altura);
        echo "<hr>";
        echo "Outra forma de formatar números: ";
        echo number_format($altura, 2, ','); //2 é o número de casas decemais a serem utilizadas

        echo "<br>";
        echo "<hr>";

        //Pegando apenas um pedaço da string...
        echo "Apenas os 7 primeiros caracteres: ";
        echo mb_substr($texto, 0, 7, 'UTF-8'); //do caractér zero até o 7º em relacão à ele

        echo "<br>";
        echo "<br>";
        echo "<br>";
        echo "Apenas uma brincadeirinha...: ";
        $ಠ_ಠ = "PHP é top!";
        echo $ಠ_ಠ;

        echo "<br>";
        $🥸 = "textooooo";
        echo $🥸;

        //Não façam isso profissionalmente, por favor :)
        //Leitura obrigatória: Código limpo
    ?>
</body>
</html>