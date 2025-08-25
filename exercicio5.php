<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 05 - Números Amigos</title>
</head>
<body>
    <form method="POST">
        <label for="n1">Primeiro número: </label>
        <input type="number" id="n1" name="n1" required>
        </br>
        <label for="n2">Segundo número: </label>
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
                
            }
        }
    }
    ?>
</body>
</html>