<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora de Fatorial</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h2>Calculadora de Fatorial</h2>
    <form method="post">
        <label for="numero">Digite um número:</label>
        <input type="number" id="numero" name="numero" required>
        <button type="submit">Calcular Fatorial</button>
    </form>

    <?php
    function calcularFatorial($numero) {
        if ($numero < 0) {
            return "O fatorial não está definido para números negativos.";
        } elseif ($numero == 0) {
            return 1;
        } else {
            $fatorial = 1;
            for ($i = 1; $i <= $numero; $i++) {
                $fatorial *= $i;
            }
            return $fatorial;
        }
    }

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $numero = $_POST["numero"];
        echo "<p>O fatorial de $numero é: " . calcularFatorial($numero) . "</p>";
    }
    ?>
    
</body>
</html>
