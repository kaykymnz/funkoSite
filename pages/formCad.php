<div class="divForm">
    <form class="formulario" action="cadastro.act.php" method="post" enctype="multipart/form-data">
        <p>Cadastro de Funko para venda no Site</p>
        <input type="hidden" name="codUser" value="<?php $_SESSION['cod'] ?>">
        <p>Nome do Personagem</p>
        <input type="text" name="nomeFunko" placeholder="Exemplo: Luffy Gear Two, Western Barbie">
    </form>
</div>