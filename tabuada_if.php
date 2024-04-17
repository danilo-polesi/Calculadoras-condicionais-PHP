<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabuada</title>
</head>
<body>
    <h2>Tabuada</h2>
    <form method="post" action="">
        <label for="numero">Escolha um número entre 1 e 10:</label>
        <input type="number" id="numero" name="numero" min="1" max="10" required>
        <button type="submit">Gerar Tabuada</button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $numero = $_POST['numero'];

        if ($numero >= 1 && $numero <= 10) {
            echo "<h3>Tabuada do $numero:</h3>";
            echo "<ul>";

            $i = 1;
            while ($i <= 10) {
                $resultado = $numero * $i;
                echo "<li>$numero x $i = $resultado</li>";
                $i++;
            }

            echo "</ul>";
        } else {
            echo "<p>O número digitado não está dentro do intervalo válido.</p>";
        }
    }
    ?>
</body>
</html>
