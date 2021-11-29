<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EUSOUMILIOR</title>
</head>
<body>
    <h1> venha ser o milior</h1>
    <p> sistema para cadastro dos miliores </p>
    <form action="salvarclientes.php" method="get">
        <label for="nome">Nome</label>  
        <input type= "text" name="nome" id="nome"><br>
        <label for="cpf">CPF</label>
        <input type="text" name="cpf" id="cpf"><br>
        <label for="telefone">Telefone</label>
        <input type="number" name="telefone" id="telefone"><br>
        <label for="email">Email</label>
        <input type="email" name="email" id="email"><br>

        <input type="submit" name="milior" value="salvar milior"><br>

    </form>
    <style>
        body{
            color:white; 
            background-image: url("https://i.ytimg.com/vi/Sz6Sh-h6C84/maxresdefault.jpg");
        }
    </style>
    
</body>
</html>