<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 01 - Par ou Ímpar</title>
</head>
<body>
     <form method="POST">
        <label for="numero">Digite um número:</label>
        <input type="number" id="numero" name="numero" required>
        <button type="submit" id="vpi" name="vpi">Verificar</button>
    </form>

    <?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        if (isset($_POST['vpi'])) {
            $numero = filter_var($_POST['numero'], FILTER_VALIDATE_INT);
            if ($numero === false) {
                echo "Número inválido!";
            } else {
                if ($numero % 2 == 0) {
                    echo "O número $numero é <strong>par</strong>.";
                } else {
                    echo "O número $numero é <strong>ímpar</strong>.";
                }
            }
        }
    }
    ?>
</body>
</html>