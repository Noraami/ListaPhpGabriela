<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 04 - Fatorial</title>
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
                if ($numero > 0 ) {
                    echo "O fatorial de $numero";
                    /*$resultado = gmp_fact($numero);
                    echo "O fatorial de $numero é <strong>" . gmp_strval($resultado) . "</strong>.";*/
                    for ($i = $numero - 1; $i >= 1; $i--) {
                        $numero *= $i;
                    }
                    echo " é <strong>$numero</strong>.";
                } else {
                    echo "Por favor, insira um número inteiro não negativo.";
                }
            }
        }
    }
    ?> 
</body>
</html>