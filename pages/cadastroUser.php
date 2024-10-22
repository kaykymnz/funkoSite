<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style/style.css">
    <title>Document</title>
</head>
<body>
<div class="loginAllCad">
        <div class="navbarLoginCad">
            <img src="../images/funkoLog2.png" alt="">
        </div>
        <div class="loginBodyCad">
            <form action="login.act.php" enctype="multipart/form-data" method="post">
                <h3>Seja bem vindo à melhor loja de Funkos do Brasil!</h3>
                <p>Email:</p>
                <p><input type="email" placeholder="Exemplo@xxxx.com" name="senhaUser"></p>
                <p>Usuário:</p>
                <p><input type="text" placeholder="Usuário" name="user"></p>
                <p>Senha:</p>
                <p><input type="password" placeholder="Senha" name="password"></p>
                
                <p><input type="submit" value="Cadastrar-se"></p>

                <div><div class="linha"></div>OU<div class="linha"></div></div>
                <div class="googleBtn"><img src="../images/google.png" alt=""><div>Entrar com o Google</div></div>
                <div class="googleBtn"><img src="../images/face.png" alt=""><div>Entrar com o Facebook</div></div>
                <div class="googleBtn"><img src="../images/apple.png" alt=""><div>Entrar com a Apple</div></div>
            </form>
        </div>
    </div>
</body>
</html>