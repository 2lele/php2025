<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exemplo Par ou Ímpar</title>
</head>
<body>
     <h1>Verificar se um número é Par ou Ímpar</h1>
    <form action="parimpar.php" method="get">
        Número: <input type="number" name="numero" required>
        <br><br>
        <input type="submit" value="Verificar">
    </form>
    <?php
    if (isset($_GET["numero"])) {
        $numero = $_GET["numero"];
        echo "Número: " . $numero;
        echo "<br>";
        if (($numero % 2) == 0) {
          echo "O número ". $numero ." é Par.";
        } else {
          echo "O número ". $numero ." é Ímpar.";
        }
    }
    ?>  
    
</body>
</html>