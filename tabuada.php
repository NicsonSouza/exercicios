<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabuada</title>
</head>

<body>

    <form action="">
        <h1>Tabuada de soma</h1>
        <p>Insira um número</p>
        <input type="text" name="numero">
        <?php include 'operacao.php' ?>
        <button type="submit">enviar</button>
    </form>

    <?php
    $num = $_GET["numero"];
    $op = $_GET["operacao"];

    switch ($op) {

        case 'Soma':
            for ($i = 0; $i <= 10; $i++) {
                echo "{$num}+{$i} = ", ($num + $i), "<br>";
            }break;

        case 'Subtracao':
            for ($i = 0; $i <= 10; $i++) {
                echo "{$num}-{$i} = ", ($num - $i), "<br>";
            }break;

        case 'Multiplicacao':
            for ($i = 0; $i <= 10; $i++) {
                echo "{$num}*{$i} = ", ($num * $i), "<br>";
            }break;

        case 'Divisao':
            for ($i = 1; $i <= 10; $i++) {
                echo "{$num}/{$i} = ", ($num / $i), "<br>";
            }break;

        case 'Resto':
            for ($i = 1; $i <= 10; $i++) {
                echo "{$num}%{$i} = ", ($num % $i), "<br>";
            }break;
    }


    ?>

</body>

</html>