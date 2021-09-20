<?php 
    if(isset($_POST['submit']) && !empty($_POST['email']) && !empty($_POST['senha'])){
        include_once('config.php');
        $email = $_POST['email'];
        $senha = $_POST['senha'];

        $sql = "SELECT * FROM cadastro WHERE email = '$email' and senha = '$senha'";

        $result = $conexao->query($sql);

        if(mysqli_num_rows($result) < 1){
            echo "<script>alert('Usuário ou senha incorretos!'); location= './login.php';</script>";
        }
        else
        {
            header('Location: sobre.php');
        }
    }
    else
    {
        header('Location: login.php');
    }
?>
