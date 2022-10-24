<?php
//include_once('classes/Mysql.php');
/*   $print = function($class){
        if(file_exists('classes/'.$class.'.php')){
         include_once('classes/'.$class.'.php');
        }
    };
        spl_autoload_register($print); */
        $dbHost = 'localhost';
        $dbName = 'form_cadastro';
        $dbUsername = 'root';
        $dbPassword = '';

        define('HOST', $dbHost);
        define('DATABASE', $dbName);
        define('USER', $dbUsername);
        define('PASSWORD', $dbPassword);

        $conexao = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);
?>