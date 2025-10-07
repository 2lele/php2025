<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cáculo do IMC</title>
    <?php
        require_once("../../estrutura/funcoes/imc.php");
    ?>
</head>

<body>
    <h1>Cáculo do IMC</h1>
    <form action="index.php" method="POST">
        <label for="inome">Nome:</label>
        <input id="inome" name="inome" type="text">
        <br>
        <label for="iidade">Idade:</label>
        <input id="iidade" name="iidade" type="number">
        <br>
        <label for="ialtura">Altura:</label>
        <input id="ialtura" name="ialtura" type="text" alt="Informe a atura em metros">
        <br>
        <label for="ipeso">Peso:</label>
        <input id="ipeso" name="ipeso" type="text" alt="Informe o pelo em kg">
        <br>
        <br>
        <button type="submit">Calcular</button>
        <br>
        <br>
    </form>
    <?php
    if (
        isset($_POST["inome"]) &&
        isset($_POST["iidade"]) &&
        isset($_POST["ialtura"]) &&
        isset($_POST["ipeso"])
    ) {
        //Print_r exibe todo o conteúdo de um array (vetor) 
        //print_r($_POST); 
        //calcular o IMC
        $nome = $_POST['inome'];
        $idade = $_POST['iidade'];
        $imc = imc($_POST["ialtura"], $_POST["ipeso"]);
        //Mostrar a classificação de peso conforme o IMC
        $classificacao = classificaimc($imc);
        echo "<br>";
        echo "$nome com idade de $idade e IMC de $imc, seu peso está $classificacao";
    } else {
        echo "Atenção! Informe todos os dados";
    }
    ?>

</body>

</html>