<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crescente</title>
</head>
<body>
    
<form action="">
    <input type="text"name="num">
    <input type="text"name="num1">
    <button type="submit">enviar</button>
</form>

<?php
$primeiro_num = $_GET['num'];
$segundo_num = $_GET['num1'];

if($primeiro_num > $segundo_num){
    echo"<br>",$segundo_num, " e ", $primeiro_num;
}elseif($segundo_num > $primeiro_num){
    echo"<br>",$primeiro_num, " e ",$segundo_num;
}else{
    echo"Não tem sequencia crescente";
}
?>

</body>
</html>