<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pesquisa em Arrays</title>
</head>
<body>
    <?php
        $lista = ['Banana', 'Laranja', 'Maçã', 'Pêra', 'Chocolate'];

        echo '<pre>';
		print_r($lista);
		echo '</pre>';

        /*
            Se encontrar retorna a posição. 
            Se não encontrar, retorna "null"
        */
        $encontrou = array_search('Maçã', $lista);

        echo('Encontrou a Maçã? ');
        echo(($encontrou != null) ? 'Sim, na posição '.$encontrou : 'Não');

        //Outra forma, usando o "in_array":
        /*
            Retorna 1 se encontrar
            Retorna "vazio" (string vazia) se não encontrar
         */
        $existe  = in_array('Pêra', $lista);  
        echo('<br>');
        var_dump($existe);
    ?>
</body>
</html>