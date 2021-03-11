<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desvio Condicional - Parte 1</title>
</head>
<body>
    <?php
        /*
			O desvio condicional ocorre quando
			uma condição é satisfeita dentro de 
			um bloco "se..então..". Assim:
			
			...
			SE (condição booleana) {
				SE DER VERDADEIRO, VAI ENTRAR
				NESTE BLOCO
			} SENÃO {
				SE DER FALSO, VAI ENTRSR
				NESTE BLOCO
			}

			NO PHP a sintaxe é assim:
			if(condição) {
				//true...
			} else {
				//false
			}

			== -> comparação. Ex. 2 == 2 -> TRUE
			!= ou <>  -> diferente. Ex: 2 != 5 -> TRUE
			< ou >   -> menor ou maior. Ex.: 2 > 5 -> FALSE
			===    -> são iguais E do mesmo tipo?
			!==    -> são diferentes e de tipos diferentes?
		*/

        $x = 33;
        $y = 34;
        $z = "33";
        $w = "36";
        
        if ($x == $y) {
            echo 'X é igual a Y!';
        } else {
            echo 'X é diferente de Y!'; //Cai aqui
        }
        
        echo '<br>';
        if ($x == $z) {
            echo 'X é igual a Z!'; //Cai aqui
        } else {
            echo 'X é diferente de Z!'; 
        }

        echo '<br>';
        if ($x === $z) {
            echo 'X é igual a Z!'; 
        } else {
            echo 'X é do tipo diferente de Z!'; //Cai aqui
        }

        echo '<br>';
        if ($w === $z) {
            echo 'W é igual a Z!'; 
        } else {
            echo 'W é do tipo diferente ou contém valor diferente de Z!'; //Cai aqui
        }

        //"if ternário"
        echo '<br>';
        echo ($x == $y) ? 'X é igual a Y!' : 'X é diferente de Y!';
    ?>
</body>
</html>