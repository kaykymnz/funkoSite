<div class="divForm">
    <form class="formulario" action="cadastro.act.php" method="post" enctype="multipart/form-data">
        <p>Cadastro de Funko para venda no Site</p>
        <p>Nome do Personagem</p>
        <input type="text" name="nomeFunko" placeholder="Exemplo: Luffy Gear Two, Western Barbie">
        <p>Categoria do Funko:</p>
        <p>
            <select name="catFunko">
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
        <input type="file" name="img1" id="img1" onchange="previewImage(event, 'preview1')">
        <img id="preview1" style="display: none; max-width: 200px; margin-top: 10px;">
        
        <p>Imagem 2 (funko fora da caixa)</p>
        <input type="file" name="img2" id="img2" onchange="previewImage(event, 'preview2')">
        <img id="preview2" style="display: none; max-width: 200px; margin-top: 10px;">
        
        <p>Imagem 3</p>
        <input type="file" name="img3" id="img3" onchange="previewImage(event, 'preview3')">
        <img id="preview3" style="display: none; max-width: 200px; margin-top: 10px;">
        
        <p>Valor do Funko</p>
        <input type="number" name="precoFunko" placeholder="Sem vírgula (Exemplo: 199)">
        <p><input type="submit" value="Cadastrar"></p>
    
    </form>
</div>

<script>
    function previewImage(event, previewId) {
        const input = event.target;
        const preview = document.getElementById(previewId);
        
        if (input.files && input.files[0]) {
            const reader = new FileReader();
            
            reader.onload = function(e) {
                preview.src = e.target.result;
                preview.style.display = 'block';
            }
            
            reader.readAsDataURL(input.files[0]);
        }
    }
</script>
