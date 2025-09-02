<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <h1>Calcular idade e verificar maioridade</h1>
    <form action="idade.php" method="get">
        Nome: <input type="text" name="nome" required>
        <br> <br>
        Data de Nascimento: <input type="date" name="data_nascimento" required>
        <br> <br> 
        <input type="submit" value="Calcular Idade">
    </form>
    <br>
    <?php
    date_default_timezone_set('America/Sao_Paulo');
    if (isset($_GET["nome"]) && isset($_GET["data_nascimento"])) {
        $nome = htmlspecialchars($_GET["nome"]);
        $data_nascimento = new DateTime($_GET["data_nascimento"]);
        $hoje = new DateTime();
        $idade = $hoje->diff($data_nascimento)->y;
        echo "Nome: $nome <br>";
        if ($idade >= 18) {
            echo "$nome é maior de idade.";
        } else {
            echo "$nome é menor de idade.";
        }
    }
    ?>
</body>
</html>