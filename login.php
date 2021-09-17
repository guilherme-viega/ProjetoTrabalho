<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <style>
        body{
            font-family: Arial, Helvetica, sans-serif;
            background-image: linear-gradient(to left, rgb(175,44,245), rgb(0,250,154));
        }
        div{
            color: white;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%,-50%);
            background-color: rgba(0, 0, 0, 0.6);
            padding: 15px;
            border-radius: 15px;
            width: 20%;
        }
        fieldset{
            border: 3px solid dodgerblue;
        }
        legend{
            border: 1px solid dodgerblue;
            padding: 10px;
            text-align: center;
            background-color: dodgerblue;
            border-radius: 8px;
        }
        input{
            border-bottom: 1px solid white;
            outline: none;
            color: black;
            font-size: 15px;
            width: 100%;
            letter-spacing: 2px;
            border-radius: 10px;
            padding: 5px;
        }
        .submit{
            border-radius: 10px;
            border:none;
            padding: 10px;
            background-color:rgb(0,250,154);
            width: 50%;
        }
        .submit:hover{
            background-color: rgb(0,255,0);
            cursor: pointer;
            font-size: 14px;
        }



    </style>
</head>
<body>
    <div>
        <h1>Login</h1>
        <form action="existeLogin.php" method="POST">    
            <input type="text" name="email" placeholder="Email">
            <br>
            <input type="password"  name="senha" placeholder="Senha">
            <br><br>
            <input class= "submit" type="submit" name="submit" value="Login">
            <a href="home.php"><strong>Voltar</strong></a>
        </form>
    </div>
</body>
</html>