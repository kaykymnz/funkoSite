<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" sizes="32x32" href="../images/funkoLog.png">
    <link rel="stylesheet" href="../style/style.css">
    <title>Produtos | Funko Log</title>
</head>
<body>
    <?php
        include('navbar.php');
        require('connect.php');
    ?>

    <div class="allVitrine">
        <h1>Todos Nossos Funkos!</h1>
        <div class="vitrine">

                        <div class="vitrinePrds">

            <?php
                 $funkos = mysqli_query($con, "Select * from `produtofunko` ORDER BY `codFunko` DESC");
        
                 while($funko=mysqli_fetch_array($funkos)){
                    $valorSemDesconto = $funko['valorFunko']  + 50;
                    echo "  <div class=prd>
                                <p><a href=pagCompra.php?cod=$funko[codFunko]><img src=$funko[imgFunko1]></a></p>
                                <p><a href=pagCompra.php?cod=$funko[codFunko]>Funko POP! $funko[midiaFunko] - $funko[nomeFunko] <br> #$funko[numFunko] </a></p>
                                <p><a href=pagCompra.php?cod=$funko[codFunko]>R$$valorSemDesconto,00 </a></p>
                                <p><a href=pagCompra.php?cod=$funko[codFunko]>R$$funko[valorFunko],00 </a></p>
                                <p><a href=pagCompra.php?cod=$funko[codFunko]><input type=button value=Comprar class=comprarBtn></a></p>
                                <p><a href=><input type=button value=\"Adicionar aos Favoritos\" class=favBtn></a></p>
                            </div>
                    ";

                 }
            ?>
        </div>
            <div class="bannerVitrine">
                <img src="../images/bannerVitrine.png" alt="">
            </div>
        </div>

    </div>
</body>
</html>