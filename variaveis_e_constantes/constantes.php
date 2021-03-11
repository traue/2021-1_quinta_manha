<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        //Constantes:
        define('DB_USER', 'admin');
        define('DB_PASS', 123456);
        define('DB_URL', 'localhost/banco');

        //Para concatenar textos (Strings) no PHP, usar o ".", conforme
        echo DB_USER . '<br>';
        echo DB_PASS . '<br>';
        echo DB_URL . '<br>';

        //Tentativa de alteração de valor de uma constante...
        //vamos ver o que vai acontecer...
        //Erro "proposital", apenas para entendermos que não podemos redefinir constantes
        define('DB_USER', 'root');
        echo DB_USER . '<br>';
    ?>
</body>
</html>