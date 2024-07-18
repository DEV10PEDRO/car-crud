<?php
require 'GerenciadorCell.php';

// Gerencia o CRUD usando GerenciadorCarros
$gerenciadorCell = new GerenciadorCell();
$celular = $gerenciadorCell->getCell();

// Exibe a lista de carros
if (!empty($celular)) {
    foreach ($celular as $indice => $celular) {
        echo "<div class='item-carro'>";
        echo "Marca: " . htmlspecialchars($celular['marca']) . "<br>";
        echo "Modelo: " . htmlspecialchars($celular['modelo']) . "<br>";
        echo "Código: " . htmlspecialchars($celular['codigo']) . "<br>";
        
        echo "<a class='botao-deletar' href='deletar_carro.php?indice={$indice}'>Deletar</a>";
        echo "</div>";
    }
} else {
    echo "<p>Nenhum carro encontrado.</p>";
}
?>
