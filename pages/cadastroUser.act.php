<?php   
    session_start();
    extract($_POST);
    require('connect.php');


    $senha = md5($senha);
    // $arquivo = "imgs/".md5(time().$foto['size']). ".jpg";
    // move_uploaded_file($foto['tmp_name'],$arquivo);

    if (mysqli_query($con, "INSERT INTO `users` (`codUser`,`nomeUser`,`emailUser`,  `senhaUser`)
         VALUES (NULL, '$user', '$email','$senha');")){
        $msg = "Cadastrado com sucesso!";
  }else{
        $msg = "Erro ao gravar";
       }

       echo $msg;
?>