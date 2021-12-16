<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculo de números</title>
</head>
<body>
    <form action="">
        <input type="text" name="a">
        <input type="text" name="b">
        <input type="text" name="c">
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
        echo"Soma é maior que multiplicação";
    }elseif($resultado < $resultado2){
        echo"Soma é menor que multiplicação";
    }elseif($resultado > $resultado2){
        echo"A+C é maior que B+D";
    }elseif($resultado < $resultado2){
        echo"A+C é menor que B+D";
    }else{
        echo"A+C é igual a B+D";
    }

    ?>

<!-- 7 Resolva um Exercício em PHP que receba os valores A, B, C e D. 
Efetue a soma entre A e C, a multiplicação entre B e D e verifique se o resultado da soma é maior, 
menor ou igual ao da multiplicação. 
Imprima: “A+C é maior que B+D”, “A+C é menor que B+D”, “A+C é igual a B+D”. -->
</body>
</html>