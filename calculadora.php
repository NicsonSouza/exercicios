<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora</title>
</head>

<body>
    <h1>Insira dois números</h1>

    <form action="">
        <span>Primeiro número</span>
        <input type="text" name="numero"><br>
        <span>Segundo número</span>
        <input type="text" name="numero0">
        <button type="submit">enviar</button>
    </form>


    <?php

    $num = $_GET["numero"];
    $num1 = $_GET["numero0"];

    if ($num > 0) {
        echo "<br>", "<br>", "<h2>Resultados</h2>";
        echo "Soma: ", $num + $num1, "<br>";
        echo "Subtração: ", $num - $num1, "<br>";
        echo "Divisão: ", $num / $num1, "<br>";
        echo "Multiplicação: ", $num * $num1, "<br>";
        echo "Resto: ", $num % $num1, "<br>", "<br>";
    } else {
        echo "Número inválido";
    }

    ?>

    <!-- 
    1* Crie um algoritmo que receba dois números e realize as funções aritméticas nele, somar, subtração, divisão, multiplicação e resto.
    2* Crie um algoritmo que imprima a tabuada de soma para o valor digitado pelo usuário.
    3* Incremente o algoritmo da questão 02 para que o usuário possa escolher o tipo de operação da tabuada.
    4* Solicite a entrada de um número e descubra se um número digitado é par ou ímpar.
    5* Faça um algoritmo PHP que receba os valores A e B, imprima-os em ordem crescente em relação aos seus valores. Exemplo, para A=5, B=4. Você deve imprimir na tela: "4 5".
    6* Efetue um algoritmo PHP que receba um valor digitado pelo usuário e verifique se esse valor é positivo, negativo ou igual a zero. Imprima na tela: “Valor Positivo”, “Valor Negativo”, “Igual a Zero”
    7* Resolva um Exercício em PHP que receba os valores A, B, C e D. Efetue a soma entre A e C, a multiplicação entre B e D e verifique se o resultado da soma é maior, menor ou igual ao da multiplicação. Imprima: “A+C é maior que B+D”, “A+C é menor que B+D”, “A+C é igual a B+D”.
    8* Crie um formulário em HTML que receba Nome, Ano de Nascimento e Sexo, e faça com que o PHP imprima o Nome, sexo e a idade;


    OBS.: Forma de enviar, crie uma pasta atividade02, e uma pasta para cada questão como uma index.php, depois transforme em rar. e anexe aqui na atividade. -->
</body>

</html>