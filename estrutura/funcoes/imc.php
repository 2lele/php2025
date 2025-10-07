<?php
    function imc($altura, $peso)
    {
        $imc = $peso / ($altura * $altura);
        return $imc;
    }

    function classificaimc($imc)
    {
        /*
            Menor que 18.5 - Abaixo do peso ;
            Entre 18.5 e 24.9 - Peso normal ;
            Entre 25.0 e 29.9 - Pré-obesidade ;
            Entre 30.0 e 34.9 - Obesidade Grau 1 ;
            Entre 35.0 e 39.9 - Obesidade Grau 2 ;
            Acima de 40 - Obesidade Grau 3
          */
        $classificacao = "";
        if ($imc < 18.5) {
            $classicacao = "abaixo do peso ideal";
        } elseif ($imc >= 18.5 && $imc < 25) {
            $classicacao = "normal";
        } elseif ($imc >= 25 && $imc < 30) {
            $classicacao = "pré-obesidade";
        } elseif ($imc >= 30 && $imc < 35) {
            $classicacao = "obesidade grau 1";
        } elseif ($imc >= 35 && $imc < 40) {
            $classicacao = "obesidade grau 2";
        } else {
            $classicacao = "obsidade grau 3";
        }
        return $classicacao;
    }