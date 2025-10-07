<?php
session_start();

if (!isset($_SESSION["pessoas"])) {
    $_SESSION["pessoas"] = [];
}

if (isset($_POST["nome"])) {
    $pessoa = [
        "nome" => $_POST["nome"],
        "cidade" => $_POST["cidade"],
        "idade" => intval($_POST["idade"]),
        "sexo" => $_POST["sexo"]
    ];
    $_SESSION["pessoas"][] = $pessoa;
}
?>
<!DOCTYPE html>
<html>
<head><meta charset="UTF-8"><title>Cadastro Pessoas</title></head>
<body>
    <h1> Exercício 2: </h1>
<h3>Cadastro de Pessoas</h3>
<form method="post">
    Nome: <input type="text" name="nome" required><br>
    Cidade: <input type="text" name="cidade" required><br>
    Idade: <input type="number" name="idade" required><br>
    Sexo:                
    <select name="sexo">
        <option value="M">Masculino</option>
        <option value="F">Feminino</option>
    </select><br>
    <input type="submit" value="Cadastrar">
</form>

<h3>Resultados</h3>
<?php if (count($_SESSION["pessoas"]) > 0): ?>
    <h4>1. Lista de nomes e idades:</h4>
    <ul>
        <?php foreach ($_SESSION["pessoas"] as $p): ?>
            <li><?= $p["nome"] ?> - <?= $p["idade"] ?> anos</li>
        <?php endforeach; ?>
    </ul>

    <h4>2. Maiores de 18 anos:</h4>
    <ul>
        <?php foreach ($_SESSION["pessoas"] as $p): ?>
            <?php if ($p["idade"] > 18): ?>
                <li><?= $p["nome"] ?></li>
            <?php endif; ?>
        <?php endforeach; ?>
    </ul>

    <h4>3. Quantidade do sexo masculino:</h4>
    <?php
    $qtdM = 0;
    foreach ($_SESSION["pessoas"] as $p) {
        if ($p["sexo"] == "M") {
            $qtdM++;
        }
    }
    echo $qtdM;
    ?>
<?php endif; ?>
</body>
</html>