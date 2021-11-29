
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
    $nomeCliente = $_GET["nome"];
    $cpfCliente = $_GET["cpf"];
    $telefoneCliente = $_GET["telefone"];
    $emailCliente = $_GET["email"];
    echo "nome: " . $nomeCliente . "<br>";
    echo "cpf: " . $cpfCliente . "<br>";
    echo "telefone: " . $telefoneCliente . "<br>";
    echo "email" . $emailCliente . "<br>";
?>
<style>
        body{
            color:white; 
            background-size: 100vw 100vh;
            background-image: url("https://img.r7.com/images/memes-eliminacao-flamengo-para-o-corinthians-27092018092626648");
        }
    </style>
</body>
</html>
    