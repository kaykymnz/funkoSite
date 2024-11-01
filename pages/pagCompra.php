<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style/style.css">
    <title>Funkok POP! | Funko Log</title>
</head>
<body>
    <?php include('navbar.php'); ?>

    <?php
        // include('navbar.php');
        require('connect.php');

        $codigo = $_GET['cod'];


        $busca = mysqli_query($con, "Select * from `produtofunko` where `codFunko` = '$codigo'");

        while($funko = mysqli_fetch_array($busca)){
            $valorSemDesc = $funko['valorFunko'] + 50;
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
                    <div class=direitaCompra>
                        <div class=titulo>Funko POP! $funko[midiaFunko] - $funko[nomeFunko] <br> #$funko[numFunko]</div>                    
                        <div class=vendEntg> <p>VENDIDO E ENTREGUE POR: <strong>FUNKOLOG</strong> </p> <p> | </p> <p>EM ESTOQUE</p> </div>
                        <div class=valorVenda> <p>R$$valorSemDesc,00</p> <p> R$$funko[valorFunko],00</p> </div>
                        <div class=infsAbaixoPreco> <p>Em até <strong>12x</strong> de <strong>R$"; echo intval($funko['valorFunko'] / 12); echo ",00 </strong> sem juros no cartão Funko Log</p></div>
                        <div class=infsAbaixoPreco2><p>Ou em <strong>1x</strong> com <strong>10% Off</strong> </p></div>
                        <div class=opcPgmnt><p>Ver mais opções de pagamento</p></div>
                        <div class=btnsCompraFunko> <input type=button value=Comprar> <input type=button value=\"Carrinho +\"></div>
                    
                    
                    </div>
                </div>
                ";
            

        }
    ?>



</body>
</html>