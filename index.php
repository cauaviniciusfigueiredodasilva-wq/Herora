<?php

include 'cabecalho.php';
include 'dados.php';
?>

<h2>Nosso Catálogo</h2>

<div class="cards-container">
    <?php
    foreach ($produtos as $jogo) {
        echo '<div class="card">';
            echo '<img src="' . $jogo['imagem'] . '" alt="Imagem do jogo ' . $jogo['nome'] . '">';
            echo '<h3>' . $jogo['nome'] . '</h3>';
            
            echo '<p class="preco">R$ ' . number_format($jogo['preco'], 2, ',', '.') . '</p>';
            
            echo '<a href="produto.php?id=' . $jogo['id'] . '" class="btn-detalhes">ver detalhes</a>';
        echo '</div>';
    }
    ?>
</div>

<?php
include 'rodape.php';
?>