<?php
    session_start();
    //print_r($_REQUEST);
    if(isset($_POST['acao']) && !empty($_POST['Email']) && !empty($_POST['Senha']))
    {
        //acessa
        include_once('config.php');
        $email = $_POST['Email'];
        $senha = $_POST['Senha'];

        /*print_r('Email: ' . $email);
        print_r("<br>");
        print_r('Senha: ' . $senha);
        */
        $sql = "SELECT * FROM usuarios WHERE Email = '$email' and Senha = '$senha'";

        $result = $conexao->query($sql);
        $result = $result->fetch_assoc();
        //print_r($result);
        
        //print_r($sql);
        
        if($result >= 1){
        $_SESSION['Email'] = $email;
        $_SESSION['Senha'] = $senha;
        header('Location: sistema.php');

        }else{
        unset($_SESSION['Email']);
        unset($_SESSION['Senha']);
        header('Location: login.php');

        }
    }
    else
    {
        //nao acessa
        header('location: login.php');
    }
?>