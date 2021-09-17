<?php 
    include_once('config.php');

    if(isset($_POST['submit'])){
        $nome = $_POST['nome'];
        $email = $_POST['email'];
        $senha = $_POST['senha'];
        $data_nascimento = $_POST['data_nascimento'];
        $cidade = $_POST['cidade'];
        $estado = $_POST['estado'];
        
        $verifica_email = mysqli_query($conexao, "SELECT * FROM cadastro WHERE email = '{$email}'");
        if(mysqli_num_rows($verifica_email) > 0) {
            echo "<script>alert('E-mail já cadastrado, por favor tente novamente.')</script>'";
        }
        else{
            $result = mysqli_query($conexao, "INSERT INTO cadastro(nome,email,senha,data_nascimento,cidade,estado) 
            VALUES ('$nome','$email','$senha','$data_nascimento','$cidade','$estado')");
            if(mysqli_num_rows($result) < 1){
                echo "<script>alert('Usuário cadastrado com sucesso. Você sera redirecionado!'); location= './home.php';</script>";
            }    
        }
       

        
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de clientes</title>
    <style>
        body{
            font-family: Arial, Helvetica, sans-serif;
            background-image: linear-gradient(to right, rgb(175,44,245), rgb(0,250,154));
        }
        .box{
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
            border: 3px solid rgb(0,250,154);
        }
        legend{
            border: 1px solid rgb(0,250,154);
            padding: 10px;
            text-align: center;
            background-color: rgb(0,250,154);
            border-radius: 8px;
        }
        .inputBox{
            position: relative;
        }
        .inputUser{
            background: none;
            border: none;
            border-bottom: 1px solid white;
            outline: none;
            color: white;
            font-size: 15px;
            width: 100%;
            letter-spacing: 2px;
        }
        .labelInput{
            position: absolute;
            top: 0px;
            left: 0px;
            pointer-events: none;
            transition: .5s;
        }
        .inputUser:focus ~ .labelInput,
        .inputUser:valid ~ .labelInput{
            top: -20px;
            font-size: 12px;
            color: dodgerblue;
        }
        #data_nascimento{
            border: none;
            padding: 8px;
            border-radius: 10px;
            outline: none;
            font-size: 15px;
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
    <div class="box">
        <form method="POST" action="./cadastro.php">
            <fieldset>
                <legend><b>Cadastro</b></legend>
                <br>
                <div class="inputBox">
                    <input type="text" name="nome" id="nome" class="inputUser" required>
                    <label for="nome" class="labelInput">Nome completo</label>
                </div>
                <br><br>
                <div class="inputBox">
                    <input type="text" name="email" id="email" class="inputUser" required>
                    <label for="email" class="labelInput">Email</label>
                </div>
                <br><br>
                <div class="inputBox">
                    <input type="password" name="senha" id="senha" class="inputUser" required>
                    <label for="senha" class="labelInput">Senha</label>
                </div>
                <br><br>
                <label for="data_nascimento"><b>Data de Nascimento:</b></label>
                <input type="date" name="data_nascimento" id="data_nascimento" required>
                <br><br><br>
                <div class="inputBox">
                    <input type="text" name="cidade" id="cidade" class="inputUser" required>
                    <label for="cidade" class="labelInput">Cidade</label>
                </div>
                <br><br>
                <div class="inputBox">
                    <input type="text" name="estado" id="estado" class="inputUser" required>
                    <label for="estado" class="labelInput">Estado</label>
                </div>
                <br><br>
                <input class="submit" type="submit" name="submit" id="submit" value="Cadastrar">
                <br><br>
                <a href="home.php"><strong>Voltar</strong></a>
            </fieldset>
        </form>
    </div>
</body>
</html>