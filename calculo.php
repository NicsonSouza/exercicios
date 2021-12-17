<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculo de números</title>
</head>
<body>
    <form action="">
        <h1>Valor A</h1>
        <input type="text" name="a">
        <h1>Valor B</h1>
        <input type="text" name="b">
        <h1>Valor C</h1>
        <input type="text" name="c">
        <h1>Valor D</h1>
        <input type="text" name="d">
        <button type="submit">enviar</button>
    </form>

    <?php
    $valor_a = $_GET['a'];
    $valor_b = $_GET['b'];
    $valor_c = $_GET['c'];
    $valor_d = $_GET['d'];
    $resultado = $valor_a + $valor_c;
    $resultado1 = $valor_b * $valor_d;
    $resultado2 = $valor_b + $valor_d;
    
    if($resultado > $resultado1){
        echo"<br>Soma é maior que multiplicação";
    }elseif($resultado < $resultado2){
        echo"<br>Soma é menor que multiplicação";
    }elseif($resultado > $resultado2){
        echo"<br>A+C é maior que B+D";
    }elseif($resultado < $resultado2){
        echo"<br>A+C é menor que B+D";
    }else{
        echo"<br>A+C é igual a B+D";
    }

    ?>
</body>
</html>