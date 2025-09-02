<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercícios PHP</title>
</head>
<body>
    
    <h1> Exercícios 1 PHP </h1>
    <br>

    <ul> 

     <li>
    <a href="nomeidade.php"target="_blank"> Exercício 1; </a>
    </li>

    <li>
    <a href="get.php" target="_blank"> Exercício 2; </a>
    </li>

    <li>
    <a href="idade.php" target="_blank"> Exercício 3; </a>
    </li>


    </ul>


     <?php 
       echo "<h2>Informações do Servidor</h2>";
       echo $_SERVER['SCRIPT_NAME'];
       echo $_SERVER['SERVER_NAME'];
       echo "<br>";
    ?>


</body>
</html>