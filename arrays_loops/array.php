<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Arrays em PHP</title>
</head>
<body>
    <?php
        //array sequencial:
        //$lista_compras = array("Ovos", "Bananas", "Pipoca", "Chocolate", "Leite", "Farinha");
        //ou...:
        $lista_compras = ["Bananinha", "Chocolatinho", "Pão"];
        echo '<pre>';
        var_dump($lista_compras);
        echo '</pre>';

        echo '<pre>';
        var_dump($lista_compras[2]);
        echo '</pre>';
        
        echo '<hr>';
        
        //array associativo:
        $lista = [
            'Fruta' => 'Manga',
            'PrecisaCigarro' => false,
            'c' => 'Moranguinhos',
            'd' => 'Uva'
        ];

        $lista['x'] = 'Farinha';
        unset($lista['PrecisaCigarro']); //remove por índice
        echo '<pre>';
        var_dump($lista);
        echo '</pre>';

        echo '<pre>';
        var_dump($lista['Fruta']);
        echo '</pre>';
    ?>
</body>
</html>