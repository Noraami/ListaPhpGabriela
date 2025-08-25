<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 02 - Calcular Tabuada</title>
</head>
<body>
    <form method="POST">
        <label for="n">Insira um número: </label>
        <input type="number" id="n" name="n" required>
        <button type="submit" id="tabuada" name="tabuada">Calcular</button>
    </form>

    <?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        if (isset($_POST['tabuada'])) {
            $numero = filter_var($_POST['n'], FILTER_VALIDATE_INT);
            if ($numero === false) {
                echo "Número inválido!";
            } else {
                echo "<h3>Tabuada do $numero:</h3>";
                for ($i = 0; $i <= 10; $i++) {
                    $resultado = $numero * $i;
                    echo "<p>$numero x $i = $resultado</p>";
                }
                
            }
        }
    }
    ?>
</body>
</html>