<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style/style.css">
    <link rel="icon" type="image/png" sizes="32x32" href="../images/funkoLog.png">
    <title>Perfill</title>
</head>
<body>
    <?php   
        require('connect.php');
        session_start();
        require('sec.php')
    ?>
    <div class="allPerfil">
        <div class="esquerdaPerfil">
            <div class="perfilImg">
                <div class="imgPerfil">
                    <p>foto aq</p>
                </div>
                <div class="nomePerfil"><?php echo $_SESSION['nome'] ;?></div>
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
                    <div class="atend">
                        <p>Atendimento ao Cliente</p>
                        <p>Histórico de Funkos</p>
                    </div>
                </div>
                <div class="infDir">
                    <img src="../images/deadpool.png" alt="">
                </div>
            </div>
        </div>
    </div>

    
</body>
</html>