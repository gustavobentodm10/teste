
<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=devide-width, initial-scale=1.0">
    <meta charset="UTF-8"/>
    <title>Tela de Login</title>
    <link href="css/frmlogin.css" rel="stylesheet">
</head>
<body>
    <a class="botaovoltar" href="index.php">Voltar</a>
    <div class="form_cd">
        <legend><b> Pagina de Login</b></legend>

    <form action= "testelogin.php" method="POST">

        <div class="inputbox">  <!--Input para Email -->
            <input type="email" name="Email" class="inputuser" id="email" placeholder="Email">
                <label for="email" class="labelinput"></br></label>
                    </div>

        <div class="inputbox">  <!--Input para Senha -->
            <input type="password" name="Senha" class="inputuser" id="senha" placeholder="Senha">
                <label for="senha" class="labelinput"></br></label>
                    </div>

        <div>                  <!--Input Enviar -->
            <input type="submit" name="acao" id="acao" value="Enviar">
                    </div>
        <div>             
            <input type="hidden" name="form" value="f_form">
                    </div>      
    </form>
    </div>
</body>
</html>