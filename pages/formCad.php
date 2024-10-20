<div class="divForm">
    <form class="formulario" action="cadastro.act.php" method="post" enctype="multipart/form-data">
        <p>Cadastro de Funko para venda no Site</p>
        <input type="hidden" name="codUser" value="<?php $_SESSION['cod'] ?>">
        <p>Nome do Personagem</p>
        <input type="text" name="nomeFunko" placeholder="Exemplo: Luffy Gear Two, Western Barbie">
        <p>Categoria do Funko:</p>
        <p><select name="catFunko" id="">
            <option value="Serie">Série</option>
            <option value="Animacao">Animação</option>
            <option value="Filme">Filme</option>
            <option value="Outro">Outro</option>
        </select>
        </p>
        
        <p>Nome da série/animação/filme</p>
        <input type="text" name="midFunko" placeholder="Exemplo: One Piece, Looney Tunes, Assassins Creed">
        <p>Número do funko</p>
        <p><input type="number" name="numFunko" placeholder="Localizado no canto superior direito #"></p>
        <p>Imagem de capa (funko na caixa)</p>
        <p><input type="file" name="img1"></p>
    </form>
</div>