<html lang="pt-br">
    <head>
    <meta charset="UTF-8"/>
    <!-------- Título --------->   
    <title>Bem vindo(a)!</title>
    <!-------- CSS ------------>
    <link rel="stylesheet" href="css/style-login.css">
    <!-------- Fonts ---------->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" 
    rel="stylesheet">
    </head>
    <body>
        <div class="container">  
            <center>
            <div id="login-caixa">
            <!--<img src="">--->
            <h1>LIBSYS</h1>
                <form action = "login.php" method="POST">
                <input type="username" name="usuario" placeholder="Usuário" maxlength="30">
                <input type="password" name="senha" placeholder="Senha" maxlength="32">                
                <!--<a href="">Esqueceu a senha? Clique aqui!</a>-->
                <div class="btn">
                <button type="submit" class="btn-login">Login</button>
                </div>
                </form>
            </div>
            </center>
        </div>
    </body>
</html>