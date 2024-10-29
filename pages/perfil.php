<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style/style.css">
    <link rel="icon" type="image/png" sizes="32x32" href="../images/funkoLog.png">

    <title>Perfil</title>
</head>
<body>
    <?php   
        require('connect.php');
        session_start();
        require('sec.php')
    ?>
    <div class="allPerfil">
        <div class="esquerdaPerfil">
            <p>
                <a href="../pages/">
                    <img src="../images/setaEsq.png" alt="">
                </a>
                <!-- <p>Voltar</p> -->
            </p>
            <div class="perfilImg">
                <div class="imgPerfil">
                    <img src="../images/edit.png" alt="">
                </div>
                <div class="nomePerfil"><?php echo $_SESSION['nome'] ;?></div>
                <div class="emailPerfil"><?php echo $_SESSION['email'] ;?></div>
            </div>
            <div class="colunaInfsEsq">
                <ul>
                    <li><a href="">Meu carrinho</a></li>
                    <li><a href="">Meus Funkos Favoritos</a></li>
                    <li><a href="">Minhas Informações</a></li>
                    <li><a href="logoff.php">Sair</a></li>
                </ul>
            </div>
        </div>
        <div class="direitaPerfil">
            <div class="bannerPerfil">
                <img src="../images/bannerPerfil.png" alt="">
            </div>
            <div class="infPerfil">
                <div class="infEsq">
                    <p>Últimos Funkos Vistos</p>
                    <div class="carousel-container">
                        <button class="carousel-btn left-btn">&#10094;</button>
                            <div class="carousel">
                                <?php 
                                $funkos = mysqli_query($con, "SELECT * FROM `produtofunko` WHERE `catFunko` like 'animacao'");
                                while($funko=mysqli_fetch_array($funkos)){

                                    echo "<div class=card> <a href= ><img src= $funko[imgFunko1]> </a></div>";

                                }
                                ?>
                                <!-- <div class="card">Card 2</div>
                                <div class="card">Card 3</div>
                                <div class="card">Card 4</div>
                                <div class="card">Card 5</div> -->
                            </div>
                        <button class="carousel-btn right-btn">&#10095;</button>
                    </div>
                </div>
                <div class="infDir">
                    <img src="../images/deadpool.png" alt="">
                </div>
            </div>
        </div>
    </div>

    <script src="../js/carousel.js"></script>
</body>
</html>