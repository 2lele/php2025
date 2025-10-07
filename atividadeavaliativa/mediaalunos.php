
<?php
session_start();

if (!isset($_SESSION["alunos"])) {
    $_SESSION["alunos"] = [];
}

if (isset($_POST["nome"]) && isset($_POST["nota"])) {
    $aluno = [
        "nome" => $_POST["nome"],
        "nota" => floatval($_POST["nota"])
    ];
    $_SESSION["alunos"][] = $aluno;
}

$media = 0;
$maiorNota = 0;
$nomeMaior = "";

if (count($_SESSION["alunos"]) > 0) {
    $soma = 0;
    foreach ($_SESSION["alunos"] as $a) {
        $soma += $a["nota"];
        if ($a["nota"] > $maiorNota) {
            $maiorNota = $a["nota"];
            $nomeMaior = $a["nome"];
        }
    }
    $media = $soma / count($_SESSION["alunos"]);
}
?>
<!DOCTYPE html>
<html>
<head><meta charset="UTF-8"><title>Ex1 - Média Alunos</title></head>
<body>
<h1>Exercício 1:</h1>
<h3>Média dos alunos</h3>
<form method="post">
    Nome: <input type="text" name="nome" required>
    Nota: <input type="number" step="0.1" name="nota" required>
    <br> <br>
    <input type="submit" value="Adicionar">
</form>

<h3>Resultado</h3>
<p>Média da turma: <?= number_format($media,2,",",".") ?></p>
<p>Maior nota: <?= $maiorNota ?> (<?= $nomeMaior ?>)</p>
</body>
</html>