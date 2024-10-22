<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style/style.css">
    <title>Login</title>
</head>
<body>
    <div class="loginAll">
        <div class="navbarLogin">
            <img src="../images/funkoLog2.png" alt="">
        </div>
        <div class="loginBody">
            <form action="login.act.php" enctype="multipart/form-data" method="post">
              
                <p>Email:</p>
                <p><input type="email" placeholder="Exemplo@xxxx.com" name="senhaUser"></p>
                <!-- <p>Usuário:</p>
                <p><input type="text" placeholder="usuário" name="user"></p> -->
                <p>Senha:</p>
                <p><input type="password" placeholder="Senha" name="password"></p>
                <input type="submit">
               
            </form>
        </div>
    </div>
        
</body>
</html>