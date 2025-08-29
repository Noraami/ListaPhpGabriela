<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 10 - Fibonacci</title>
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
            $numero1 = filter_var($_POST['n'], FILTER_VALIDATE_INT);
            if ($numero1 === false) {
                echo "Número inválido!";
            } else {
                $f = [];
                for ($i = 0; $i < $numero1; $i++) {
            }
        }
    }
    ?>
</body>
</html>