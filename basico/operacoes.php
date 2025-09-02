<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exemplos Operações PHP</title>
</head>
<body>
       <h1>Operações em PHP</h1>
    <?php
       echo "<h3>Operações Aritméticas</h3>";
      $a = 10;
      $b = 5;
      $c = 3;
      echo "Valores: A = $a, B = $b, C = $c";
      echo "<br>";
      echo "Soma: " . ($a + $b);
      echo "<br>";
      echo "Subtração: " . ($a - $b);
      echo "<br>";
      echo "Multiplicação: " . ($a * $b);
      echo "<br>";
      echo "Divisão: " . ($a / $b);
      echo "<br>";
      echo "Módulo (resto da divisão): " . ($a % $c);
      echo "<br>";
      echo "<h3>Operações de Atribuição</h3>";
      $x = 10;
      echo "Valor inicial: ". $x;
      echo "<br>";
      $x += 5; // $x = $x + 5-
      echo "Resultado: " . $x;
      echo "<br>";
      $x++; // $x = $x + 1
      echo "Resultado: " . $x;
    ?>
</body>
</html>