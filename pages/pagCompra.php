<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style/style.css">
    <title>Funkok POP! | Funko Log</title>
</head>
<body>
    <?php
        include('navbar.php');
        require('connect.php');

        $codigo = $_GET['cod'];
        // echo $codigo;

        $busca = mysqli_query($con, "Select * from `produtofunko` where `codFunko` = '$codigo'");
        
        while($funko = mysqli_fetch_array($busca)){
            echo "    
                <div class=allCompra>
                    <div class=imgsCompra>
                        <div class=imgsEsq>
                            <img src=$funko[imgFunko1]>
                            <img src=$funko[imgFunko2]>
                            <img src=$funko[imgFunko3]>
                        </div>
                        <div class=imgPrincipal>
                            <img src=$funko[imgFunko1]>
                        </div>                       
                    </div>
                </div>
                ";
            

        }
    ?>

</body>
</html>