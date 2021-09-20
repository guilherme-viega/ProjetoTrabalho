<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Projeto</title>
    <style>
        body{
            font-family: Arial, Helvetica, sans-serif;
            background-color: rgb(175,44,245);
            text-align: center;
            color: white;
        }
        .box{
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            background-color: rgba(0,0,0,0.5);
            padding: 30px;
            border-radius: 18px;
        }
        a{
            text-decoration: none;
            color:white;
            border:3px solid rgb(0,250,154);
            padding: 10px;
            border-radius: 10px;
        }
        a:hover{
            background-color: rgb(173,255,47);
            cursor: pointer;
            font-size: 28px;
        }
    </style>
</head>
<body>
    <br>
    <h1>Bem vindo ao gerenciador dos meus projetos<h2>
        <div class="box">
            <a href="login.php">Login</a>
            <a href="cadastro.php">Cadastro</a>
        </div>
</body>
</html>