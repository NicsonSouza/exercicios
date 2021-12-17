<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="">
        <h3>Nome: </h3>
        <input type="text" name="nome">
        <h3>Ano de nascimento: </h3>
        <input type="text" name="ano_nas">
        <h3>Sexo: </h3>
        <select name="sexo" id="">
            <option value="Masculino">Masculino</option>
            <option value="Feminino">Feminino</option>
            <option value="Outros">Outros</option>
        </select>
        <button type="submit">enviar</button>
    </form>

    <?php
    $nome = $_GET['nome'];
    $ano_nas = $_GET['ano_nas'];
    $idade = 2021 -$ano_nas;
    $sexo = $_GET['sexo'];

    echo"<br>Nome: ",$nome;
    echo"<br>Sexo: ",$sexo;
    echo"<br>Idade ";
    print_r($idade);
    ?>
</body>

</html>