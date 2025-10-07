<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>IMC</title>
</head>
<body>
    <h1> Calcular IMC </h1>
    <form action="imc.php" method="get">
        Nome: <input type="text" name="name" required>
        <br> <br>
        Idade: <input type="number" name="idade" required>
        <br> <br> 
        Altura: <input type="number" name="altura" required>
        <br> <br>
        Peso: <input type="number" name="peso" required>
        <br> <br>
        <input type="submit" value="Calcular IMC">
    </form>

    <?php
        function calcularIMC ($peso, $altura) {
            return $peso / ($altura * $altura);
        }
        function resultadoIMC($imc) {
            if ($imc < 18.5) {
                return "Abaixo do peso";
            }
            elseif ($imc > 18.5 && $imc <= 24.9 ) {
                return "Peso normal";
            }
            elseif ($imc < 25.0 && $imc > 29.0 ) {
                return "Pré- obesidade";
            }
            elseif ($imc < 30.0 && $imc > 34.9 ) {
                return "Obesidade grau 1";
            }
            elseif ($imc < 35.0 && $imc < 39.0 ) {
                return "Obesidade grau 2";
            }
            elseif ($imc > 40.0 ) {
                return "Obesidade grau 3";
            }
        }

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $nome = $_POST['nome'];
            $idade = $_POST['idade'];
            $altura = $_POST['altura'];
            $peso = $_POST['peso'];

            $imc = calcularIMC($peso, $altura);
            $resultado = resultadoIMC($imc);

            echo "<h2> Resultado <h2>";
            echo "Nome: $nome <br>";
            echo "Idade: $idade <br>";
            echo "IMC: $imc <br>";
            echo "Resultado: $resultado";

        }

        ?>

</body>
</html>