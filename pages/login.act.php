<?php
    extract($_POST);
    extract($_FILES);
    // $password = md5($password);
 
    require('connect.php');

    $busca = mysqli_query($con, "SELECT * FROM `userprod` WHERE `usuario` = '$user'");
    session_start();
    
    if($busca->num_rows ==1){
            $user = mysqli_fetch_array($busca);
        if($password === $user['senha']){
            var_dump($password);
            $_SESSION['login'] = true;
            $_SESSION['nome'] = $user['usuario'];
            $_SESSION['cod'] = $user['codUser'];
            // $_SESSION['foto'] = $user['imgUser'];
            $target = "location:cadastro.php";
        }else{
            $msg = "Email ou senha incorretos!";
            $target = "location:login.php";
        }

    }else{
        $msg = "Email ou senha incorretos";
        $target = "location:login.php";
    }
    $_SESSION['msg'] = $msg;
    echo $msg;
    header($target);
?>