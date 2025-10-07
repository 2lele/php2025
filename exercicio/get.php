<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nome e idade através do GET</title>
</head>
<body>
    <h2> EX 2; Altere a aplicação do exercício 1, para que o nome e a idade possam ser informados através de dados de um formulário html: </h2>

    <form action="get.php" method="get">
        Nome: <input type="text" name="nome" required>
        <br>
        Idade: <input type="number" name="idade" required>
        <br><br>
        <input type="submit" value="Enviar">
    </form>    
    <?php
      if (isset($_GET["nome"]) && isset($_GET["idade"])) {
          $nome = $_GET["nome"];
          $idade = $_GET["idade"];
          echo "<h2>Dados Recebidos</h2>";
          echo "Nome: " . $nome;
          echo "<br>";
          echo "Idade: " . $idade;
      }
    ?>
</body>
</html>