<?php
        require('connect.php');
        @session_start();
        $cod = $_SESSION['cod'];
        // var_dump($_SESSION);

extract($_FILES);
extract($_POST);


$imgFunko1 = "../imgsFunko/".md5(time().$img1['size']). ".jpg";
move_uploaded_file($img1['tmp_name'],$imgFunko1);

$imgFunko2 = "../imgsFunko/".md5(time().$img2['size']). ".jpg";
move_uploaded_file($img2['tmp_name'],$imgFunko2);

$imgFunko3 = "../imgsFunko/".md5(time().$img3['size']). ".jpg";
move_uploaded_file($img3['tmp_name'],$imgFunko3);

        if(mysqli_query($con, "INSERT INTO `produtoFunko` (`codFunko`,`codUser`,`nomeFunko`, `midiaFunko`, `catFunko`,`numFunko`, `imgFunko1`, `imgFunko2`, `imgFunko3`, `valorFunko`)
         VALUES (NULL,'$cod', '$nomeFunko', '$midFunko', '$catFunko', '$numFunko', '$imgFunko1', '$imgFunko2', '$imgFunko3', '$precoFunko');")){
        $msg = "Funko gravado com sucesso!";
        echo "<a href=cadastro.php>Cadastrar Outro </a><br>";
  }else{
        $msg = "Erro ao gravar";
        echo "<a href=cadastro.php>Tentar Novamente</a><br>";
       }
    
echo $msg;
$_SESSION['msg'] = $msg;
// header("location:produtos.php");



?>