<?php
   
    extract($_POST);
    extract($_FILES);
    $senhaUser = md5($senhaUser);
    // var_dump($senhaUser);
    require('connect.php');
  
    $busca = mysqli_query($con, "SELECT * FROM `users` WHERE `emailUser` = '$email'");
    session_start();
    
    if($busca->num_rows ==1){
            $user = mysqli_fetch_array($busca);
        if($senhaUser === $user['senhaUser']){

            $_SESSION['login'] = true;
            $_SESSION['nome'] = $user['nomeUser'];
            $_SESSION['cod'] = $user['codUser'];
            // $_SESSION['foto'] = $user['imgUser'];
            $target = "location:index.php";
        }else{
            $msg = "Email ou senha incorretos!1";
            $target = "location:login.php";
        }

    }else{
        $msg = "Email ou senha incorretos";
        $target = "location:login.php";
    }
    $_SESSION['msg'] = $msg;
    // echo $msg;
    header($target);
?>