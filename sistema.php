<?php
    session_start();
    include_once('config.php');
    //print_r($_SESSION);
    if((!isset($_SESSION['Email']) == true) and (!isset($_SESSION['Senha']) == true)){

        unset($_SESSION['Email']);
        unset($_SESSION['Senha']);
        header('location: login.php');

    }
    $logado = $_SESSION['Email'];

    $sql = ("SELECT * From usuarios ORDER BY codigo DESC");

    $result = $conexao->query($sql);
    print_r($result);
    die();
    //$result = $result->fetch_assoc();
    //print_r($result);
?>
<DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> SISTEMA </title>
</head>
<body>
    <h1>Acessou o Sistema</h1>
</body>
<div>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Nome</th>
                <th scope="col">Email</th>
                <th scope="col">Telefone</th>
                <th scope="col">Senha</th>
                <th scope="col">Sexo</th>
                <th scope="col">Nascimento</th>
                <th scope="col">Cidade</th>
                <th scope="col">Estado</th>
                <th scope="col">Endereço</th>
            </tr>
        <thead> 
        <tbody class="lista">
        <?php
            while($user_data = mysqli_fetch_assoc($result)){
                echo "<tr>";
                echo "<td>".$user_data['codigo']."</td>";
                echo "<td>".$user_data['nome']."</td>";
                echo "<td>".$user_data['email']."</td>";
                echo "<td>".$user_data['telefone']."</td>";
                echo "<td>".$user_data['senha']."</td>";
                echo "<td>".$user_data['sexo']."</td>";
                echo "<td>".$user_data['nascimento']."</td>";
                echo "<td>".$user_data['cidade']."</td>";
                echo "<td>".$user_data['estado']."</td>";
                echo "<td>".$user_data['endereco']."</td>";

            }
        ?>
        </tbody>
    </table> 
</div>
</html>