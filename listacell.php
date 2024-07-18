<?php
require 'GerenciadorCelular.php';

$gerenciadorcelular = new gerenciadorcelular();
$telefone = $gerenciadorcelular->getcelular();

if (!empty($telefone)) {
    foreach ($telefone as $indice => $telefone) {
        echo "<div class='item-celular'>";
        echo "Marca: " . htmlspecialchars($celulares['marca']) . "<br>";
        echo "Fabricante: " . htmlspecialchars($celulares['fabricante']) . "<br>";
        echo "Tipo de carregador: " . htmlspecialchars($celulares['tipodecarregador']) . "<br>";
        echo "<a class='botao-deletar' href='deletar_celular.php?indice={$indice}'>Deletar</a>";
        echo "</div>";
    }
} else {
    echo "<p>Nenhum celular encontrado.</p>";
}
?>