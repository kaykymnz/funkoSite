<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style/style.css">
    <link rel="icon" type="image/png" sizes="32x32" href="../images/funkoLog.png">
    <title>Login</title>
</head>
<body>
    <div class="loginAll">
        <div class="navbarLogin">
            <img src="../images/funkoLog2.png" alt="">
        </div>
        <div class="loginBody">
            <form action="login.act.php" enctype="multipart/form-data" method="post">
                <h3>Bem vindo de volta à Funko Log!</h3>
                <p>Email:</p>
                <p><input type="email" placeholder="Exemplo@xxxx.com" name="email" required></p>
                <p>Senha:</p>
                <p><input type="password" placeholder="Senha" name="senhaUser" required></p>
                <a href="">Esqueci a Senha</a>
                <p><input type="submit" value="Entrar"></p>
                <div class="linhaAll"><p class="linha"></p> <p>OU</p> <p class="linha"></p></div>
                <p><a href="cadastroUser.php"><input type="button" value="Cadastrar-se"></a></p>
                <div class="googleBtn"><img src="../images/google.png" alt=""><div>Entrar com o Google</div></div>
                <div class="googleBtn"><img src="../images/face.png" alt=""><div>Entrar com o Facebook</div></div>
                <!-- <div class="googleBtn"><img src="../images/apple.png" alt=""><div>Entrar com a Apple</div></div> -->
            </form>
        </div>
    </div>
        
</body>
</html>