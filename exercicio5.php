<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 05 - Números Amigos</title>
</head>
<body>
    <form method="POST">
        <label for="numero1">Primeiro número: </label>
        <input type="number" id="numero1" name="numero1" required>
        </br>
        <label for="numero2">Segundo número: </label>
        <input type="number" id="numero2" name="numero2" required>
        <button type="submit" id="v" name="v">Verificar</button>
    </form>

    <?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        if (isset($_POST['v'])) {
            $numero1 = filter_var($_POST['numero1'], FILTER_VALIDATE_INT);
            $numero2 = filter_var($_POST['numero2'], FILTER_VALIDATE_INT);
            if ($numero1 === false || $numero2 === false) {
                echo "Número inválido!";
            } else {
                $soma1 = 0;
                $soma2 = 0;
                for ($i = 1; $i < $numero1; $i++) {
                    if ($numero1 % $i === 0) {
                        $soma1 += $i;
                    }
                }
                for ($j = 1; $j < $numero2; $j++) {
                    if ($numero2 % $j === 0) {
                        $soma2 += $j;
                    }
                }
                if ($soma1 === $numero2 && $soma2 === $numero1) {
                    echo "Os números $numero1 e $numero2 são amigos.";
                } else {
                    echo "Os números $numero1 e $numero2 não são amigos.";
                }
                
            }

        }
    }
    ?>
</body>
</html>