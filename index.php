<?php

$nro1 = 0;
$nro2 = 0;
$result = 0;
$operation = 'add';

if (!isset($_GET['num1'], $_GET['num2'], $_GET['Calcular'])) {
    $nro1 = $_GET['num1'];
    $nro2 = $_GET['num2'];
    $operation = $_GET['calculate'];
}

switch ($operation) {
    case 'add';
        $result = $nro1 + $nro2;
        break;

    case 'subtract';
        $result = $nro1 - $nro2;
        break;


    case 'multiply';
        $result = $nro1 * $nro2;
        break;

    case 'divide';
        $result = $nro1 / $nro2;
        break;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora em PHP</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <section class="main">
        <div class="calculator">
            <form>
                <label>Primeiro Número</label>
                <input type="number" name="num1" value='<?= $nro1 ?>' required>

                <label>Segundo Número</label>
                <input type="number" name="num2" value='<?= $nro2 ?>' required>

                <select name="calculate">
                    <option value="add">Somar</option>
                    <option value="subtract">Subtrair</option>
                    <option value="multiply">Multiplicar</option>
                    <option value="divide">Dividir</option>
                </select>

                <input type="submit" value="Calcular">
                <p>O resultado é <?= $result ?></p>
            </form>
        </div>
    </section>
</body>

</html>