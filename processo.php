<?php
    require("./classes/Form.php");

    require("./classes/Mysql.php");

    include('config.php');
     Mysql::conectar();

     if(isset($_POST['acao']) && $_POST['form'] == 'f_form'){
             $nome = $_POST['Nome'];
                $email = $_POST['Email'];
                    $telefone = $_POST['Telefone'];
                        $senha = $_POST['Senha'];
                            $sexo = $_POST['Genero'];
                                $nasc = $_POST['Nasc'];
                                    $cidade = $_POST['Cidade'];
                                        $estado = $_POST['Estado'];
                                            $endereco = $_POST['Endereco'];
   
    Form::cadastrar($nome, $email, $telefone, $senha, $sexo, $nasc, $cidade, $estado, $endereco);
    echo "Usuario Cadastrado com Sucesso";
}

    header('Location: index.php');
?>           