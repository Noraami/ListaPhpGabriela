<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 07 - Número Perfeito</title>
</head>
<body>
    <form method="POST">
        <label for="n">Digite um número: </label>
        <input type="number" id="n" name="n" required>
        <button type="submit" id="v" name="v">Verificar</button>
    </form>

    <?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        if (isset($_POST['v'])) {
            $numero = filter_var($_POST['n'], FILTER_VALIDATE_INT);
            if ($numero === false) {
                echo "Número inválido!";
            } else {
                $soma = 0;
                for ($i = 1; $i < $numero; $i++) {
                    if ($numero % $i === 0) {
                        $soma += $i;
                    }
                }
                if ($soma === $numero) {
                    echo "$numero é um número perfeito.";
                } else {
                    echo "$numero não é um número perfeito.";
                }
            }
        }
    }
    ?>
</body>
</html>