<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Variáveis</title>
</head>
<body>
    <?php
        //Isso é um comentário em liniha no bloco de código PHP
        /*
            Isso é um bloco de comentário
            Podemos ter várias linhas
        */
        //As variáveis em PHP são FRACAMENTE tipadas
    
        //String (texto)
        $nome = 'Thiago Graziani Traue';

        //variável int (inteira)
        $idade = 33;
        
        //boolena (verdadeiro ou falso)
        $fumante = false;

        //Apenas para depuração:
        //Mostra o tipo e o valor da variável
        var_dump($idade);
    ?>

    <h1>Dados informados</h1>
    <hr>
    <p>Nome: <?= $nome ?> </p>
    <p>Idade: <?= $idade ?></p>
    <p>Fuma? <?= $fumante ? 'Sim' : 'Não' ?></p>

    <!-- 
        Apenas para fins didáticos: 
        As variáveis assumem o tipo do último
        valor recebido. 
        Por isso, temos que tomar cuidado:
        Exemplo abaixo:
    -->
    <?php 
        $idade = 'XYZ';
        var_dump($idade);
    ?>
    <p>Idade: <?= $idade ?></p>
</body>
</html>