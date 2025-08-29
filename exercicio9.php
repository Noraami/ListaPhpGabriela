<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 09 - Soma de Números</title>
</head>
<body>
    <form method="POST">
        <label for="n1">Digite um número: </label>
        <input type="number" id="n1" name="n1" required>
        <br>
        <label for="n2">Digite um número: </label>
        <input type="number" id="n2" name="n2" required>
        <button type="submit" id="v" name="v">Verificar</button>
    </form>

    <?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        if (isset($_POST['v'])) {
            $numero1 = filter_var($_POST['n1'], FILTER_VALIDATE_INT);
            $numero2 = filter_var($_POST['n2'], FILTER_VALIDATE_INT);
            if ($numero1 === false || $numero2 === false) {
                echo "Número inválido!";
            } else {
                $soma = 0;
                if ($numero1 < $numero2) {
                    for ($i = $numero1 + 1; $i < $numero2; $i++) {
                    $soma += $i;
                    }
                } else {
                    for ($i = $numero2 + 1; $i < $numero1; $i++) {
                        $soma += $i;
                    }
                }
                echo $soma;
            }
        }
    }
    ?>
</body>
</html>