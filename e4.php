<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cálculo da Área do Retângulo</title>
</head>
<body>
    <h1>Calcular Área do Retângulo</h1>

    <form method="POST">
        <label for="comprimento">Comprimento:</label>
        <input type="number" name="comprimento" id="comprimento" required><br><br>

        <label for="largura">Largura:</label>
        <input type="number" name="largura" id="largura" required><br><br>

        <input type="submit" value="Calcular">
    </form>

    <?php
    // Função que calcula a área do retângulo
    function calcular_area($comprimento, $largura) {
        return $comprimento * $largura;
    }

    // Verifica se os dados foram enviados pelo formulário
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $comprimento = $_POST['comprimento'];
        $largura = $_POST['largura'];

        // Calcula a área
        $area = calcular_area($comprimento, $largura);

        // Exibe o resultado
        echo "<h2>A área do retângulo é: " . $area . " unidades quadradas.</h2>";
    }
    ?>
</body>
</html>
