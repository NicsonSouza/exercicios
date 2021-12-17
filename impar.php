<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Impar ou par?</title>
</head>
<body>
 
<form action="">
<h1>Insira um número</h1>
<input type="text" name="numero">
<button type="submit">enviar</button>
</form>

<?php
$num = $_GET["numero"];
$resultado = $num % 2;

if($resultado == 0){
    echo"Número é par!";
}else {
    echo"Número impar";
}
?>
</body>
</html>