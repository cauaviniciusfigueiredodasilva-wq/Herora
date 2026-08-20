<?php
include 'cabecalho.php';
include 'dados.php';

$id_capturado = isset($_GET['id']) ? $_GET['id'] : null;


$jogo_selecionado = null;

if ($id_capturado !== null) {
    foreach (require_once 'dados.php'as $jogo) {
        if ($jogo['id'] == $id_capturado) {
            $jogo_selecionado = $jogo;
            break; 
        }
    }
}
?>


<div class="produto-detalhe">
    <?php if ($jogo_selecionado != null): ?>
        
        <img src="<?php echo $jogo_selecionado['imagem']; ?>" alt="Imagem de <?php echo $jogo_selecionado['nome']; ?>">
        
        <div class="info">
            <h2><?php echo $jogo_selecionado['nome']; ?></h2>
            <p class="descricao"><?php echo $jogo_selecionado['descricao_curta']; ?></p>
            <p class="preco-destaque">R$ <?php echo number_format($jogo_selecionado['preco'], 2, ',', '.'); ?></p>
            
            <button class="btn-comprar">COMPRAR</button>
        </div>

    <?php else: ?>
        <h2>Produto não encontrado!</h2>
        <p>Parece que este jogo não existe no nosso catálogo.</p>
        <a href="index.php">Voltar para a página inicial</a>
    <?php endif; ?>
</div>

<?php

include 'rodape.php';
?>