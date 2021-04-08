<?php

    function classificaIMC($imc) {
        if($imc < 16) {
            return "Magreza Grau III";
        } else if ($imc >= 16 && $imc <= 16.9) {
            return "Magreza Grau II";
        } else if ($imc >= 17 && $imc <= 18.4) {
            return "Magreza Grau I";
        } else if ($imc >= 18.5 && $imc <= 24.9) {
            return "Adequado";
        } else if ($imc >= 25 && $imc <= 29.9) {
            return "Pré-obeso";
        } else if ($imc >= 30 && $imc <= 34.9) {
            return "Obesidade Grau I";
        } else if ($imc >= 35 && $imc <= 39.9) {
            return "Obesidade Grau II";
        } else if ($imc >= 40) {
            return "Obesidade Grau III";
        }
    }

    function calculaIMC($peso, $altura) {
        return ($peso / ($altura * $altura));
    }

?>