<?php

    //"modelo"
    class Funcionario {

        //atributos (características):
        private $nome;
        private $telefone;
        private $cargo;
        private $salario;
        private $num_dependentes;
        private $idade; 
        private $email;

        //Modificadores de acesso (encapsulamento)
        //set "mágico":
        function __set($atributo, $valor) {
            $this->$atributo = $valor;
        }

        //get "mágico":
        function __get($atributo) {
            return $this->$atributo;
        }

        //métodos:
        function resumirDadosBasicos() {
            return 'Meu nome é ' . $this->__get('nome') 
                . ' e eu sou ' . $this->__get('cargo') . ' nesta empresa.';
        }

        function fazerAniversario() {
            $this->idade++; 
            return 'Ôba festinha na empresa! '
                . $this->__get('nome') . ' agora tem ' . $this->__get('idade')
                . ' anos! :D';
        }
    }

    //declaração de um funcionário
    $func = new Funcionario();
    $func2 = new Funcionario();
    $func->__set('nome', 'Thiago G. Traue');
    $func->__set('telefone', '(11)99999-6666');
    $func->__set('cargo', 'Professor');
    $func->__set('salario', 1000);
    $func->__set('idade', 33);
    $func->__set('num_dependentes', 0);
    $func->__set('email', 'thiago.traue@uni9.pro.br');

    $func2->__set('nome', 'Fulano');
    //...

    echo '<pre>';
    var_dump($func);
    echo '</pre>';
    echo '<br>';
    echo $func->__get('nome');
    echo '<br>';
    echo $func->resumirDadosBasicos();
    echo '<br>';
    echo $func->fazerAniversario();
    echo '<br>';
    echo $func2->__get('nome');
    
?>

