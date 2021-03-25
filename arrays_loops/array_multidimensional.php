<!DOCTYPE html>
<html lang="pt-bt">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array Multidimensional</title>
</head>
<body>
    <?php
        $lista_desejos = [];

        $lista_desejos["frutas"] = array(1 => [2, 'Bananas'], 2 => [4, 'Maçãs'], 3 => 'Moranguinhos');

        $lista_desejos['laticinios'] = [1 => ['qtd' => 12, 'Leite'], 2 => 'Manteiga', 3 => ['qtd' => 2, 'Queijo de cabra']];

        echo '<pre>';
        print_r($lista_desejos);
        echo '</pre>';
        
        echo '<hr>';

        echo $lista_desejos["frutas"][2][1];
    ?>
</body>
</html>