<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
        session_start();
        if(@$_SESSION['login'] == true){
            require('formCad.php');
        }else{
            echo "usuário não autorizado";
        }

    ?>
    <a href="logoff.php">sair</a>
</body>
</html>