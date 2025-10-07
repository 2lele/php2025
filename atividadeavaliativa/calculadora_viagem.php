<?php

session_start();


function calcularCustoViagem($distancia, $preco_combustivel, $consumo, $num_pedagios, $custo_pedagio) {

    $distancia = (float)$distancia;
    $preco_combustivel = (float)$preco_combustivel;
    $consumo = (float)$consumo;
    $num_pedagios = (int)$num_pedagios;
    $custo_pedagio = (float)$custo_pedagio;
    

    $litros = $distancia / $consumo;
    $custo_combustivel = $litros * $preco_combustivel;
    $custo_pedagios = $num_pedagios * $custo_pedagio;
    $custo_total = $custo_combustivel + $custo_pedagios;
    

    return array(
        'litros' => $litros,
        'custo_combustivel' => $custo_combustivel,
        'custo_pedagios' => $custo_pedagios,
        'custo_total' => $custo_total
    );
}


if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $dados = array(
        'distancia' => $_POST['distancia'],
        'preco_combustivel' => $_POST['preco_combustivel'],
        'consumo' => $_POST['consumo'],
        'num_pedagios' => $_POST['num_pedagios'],
        'custo_pedagio' => $_POST['custo_pedagio']
    );
    
  
    if (empty($dados['distancia']) || empty($dados['preco_combustivel']) || empty($dados['consumo']) || 
        empty($dados['num_pedagios']) || empty($dados['custo_pedagio'])) {
        $erro = "Preencha todos os campos!";
    } else {

        $resultados = calcularCustoViagem($dados['distancia'], $dados['preco_combustivel'], 
                                         $dados['consumo'], $dados['num_pedagios'], $dados['custo_pedagio']);
        
   
        $_SESSION['resultados'] = $resultados;
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Calculadora de Custo de Viagem</title>
</head>
<body>
    <h1> Exercício 2:</h1>
    <h3>Calculadora de Custo de Viagem</h3>
    
    <?php

    if (isset($erro)) {
        echo "<p>ERRO: $erro</p>";
    }
    ?>
    
    <form method="POST">
        <p>Distância da viagem (em km): <input type="text" name="distancia"></p>
        <p>Preço do combustível por litro (R$): <input type="text" name="preco_combustivel"></p>
        <p>Consumo médio do veículo (km por litro): <input type="text" name="consumo"></p>
        <p>Número de pedágios: <input type="text" name="num_pedagios"></p>
        <p>Custo médio por pedágio (R$): <input type="text" name="custo_pedagio"></p>
        <p><input type="submit" value="Calcular"></p>
    </form>
    
    <?php

    if (isset($_SESSION['resultados'])) {
        $res = $_SESSION['resultados'];
        echo "<h2>Resultados:</h2>";
        echo "<p>Litros de combustível necessários: " . number_format($res['litros'], 2) . " L</p>";
        echo "<p>Custo total do combustível: R$ " . number_format($res['custo_combustivel'], 2) . "</p>";
        echo "<p>Custo total dos pedágios: R$ " . number_format($res['custo_pedagios'], 2) . "</p>";
        echo "<p>Custo total da viagem: R$ " . number_format($res['custo_total'], 2) . "</p>";
        
 
        unset($_SESSION['resultados']);
    }
    ?>
</body>
</html>