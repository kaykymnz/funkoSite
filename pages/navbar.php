<?php 
    session_start();
    @$userName = $_SESSION['nome'];
?>
<div class="header">
    <div class="navbar">
        <div class="logo">
           <a href="../pages/index.php"> <img src="../images/funkoLog.png" alt=""></a>
        </div>
        <div class="pesquisa">
            <input type="text" placeholder="Procure aqui o seu próximo Funko!">
        </div>
        <div class="perfil">
            <?php if(@$_SESSION['login'] == true){
                echo"<a href=perfil.php>
                    <img src=../images/Perfil2.png alt=>
                    <p>Olá, $userName</p>
                    </a> ";
                }else{
                    echo"<a href=login.php>
                    <img src=../images/Perfil2.png alt=>
                    <p>Olá! <strong>Entre</strong>,<br> ou <strong>Cadastre-se</strong></p>
                    </a> ";
                }
                ?>
            
        </div>
    </div>
    <div class="subNavbar">
        <ul>
            <a href="vitrine.php"><li>Produtos</li></a>
            <a href=""><li>Animes</li></a>
            <a href=""><li>Jogos</li></a>
            <a href=""><li>Séries</li></a>
            <a href=""><li>Filmes</li></a>
            <a href=""><li>Diversos</li></a>
            <a href=""><li>Lançamentos</li></a>
        </ul>
    </div>
</div>