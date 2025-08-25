<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 03 - Positivo ou Negativo</title>
</head>
<body>
   <form method="POST">
        <label for="numero">Digite um número: </label>
        <input type="number" id="n" name="n" required>
        <button type="submit" id="v" name="v">Verificar</button>
    </form>

    <?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        if (isset($_POST['v'])) {
            $numero = filter_var($_POST['n']);
            if ($numero === false) {
                echo "Número inválido!";
            } else {
                if ($numero > 0) {
                    echo "O número $numero é <strong>positivo</strong>.";
                } else if ($numero < 0) {
                    echo "O número $numero é <strong>negativo</strong>.";
                } else {
                    echo "O número é <strong>zero</strong>.";
                }
            }
        }
    }
    ?> 
</body>
</html>