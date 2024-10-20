<?php 
    session_start();
    $userName = $_SESSION['nome'];
?>
<div class="header">
    <div class="navbar">
        <div class="logo">
            <img src="../images/funkoLog.png" alt="">
        </div>
        <div class="pesquisa">
            <input type="text" placeholder="Procure aqui o seu próximo Funko!">
        </div>
        <div class="perfil">
            <a href="">
                <img src="../images/Perfil.png" alt="">
                <p>Olá, <?php echo $userName;?></p>
            </a>
        </div>
    </div>
    <div class="subNavbar">
        <ul>
            <a href=""><li>Produtos</li></a>
            <a href=""><li>Animes</li></a>
            <a href=""><li>Jogos</li></a>
            <a href=""><li>Séries</li></a>
            <a href=""><li>Filmes</li></a>
            <a href=""><li>Lançamentos</li></a>
        </ul>
    </div>
</div>