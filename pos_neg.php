<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Positivo ou negativo?</title>
</head>
<body>
    <form action="">
        <input type="text" name="a">
        <button type="submit">enviar</button>
    </form>

    <?php
    $numero = $_GET['a'];

    if($numero > 0){
        echo"É positivo";
    }elseif($numero < 0){
        echo"É negativo";
    }else {
        echo"É zero";
    }

    ?>
</body>
</html>