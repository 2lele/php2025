<?php
function tabuada($numero, $ate)
{
    echo "Tabuada de $numero de 0 até $ate <br>";
    for ($i = 0; $i <= $ate; $i++) {
        $resultado = $i * $numero;
        echo "$i x $numero = $resultado <br>";
    }
}

function parimpar($numero) {
    if (($numero % 2) == 0) {
    return "par";
    } else {
    return "ímpar";
    }
}