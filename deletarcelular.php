<?php
require 'GerenciadorCelular.php';

if (isset($_GET['indice'])) {
    $indice = $_GET['indice'];

    $gerenciadorcelular = new GerenciadorCelular();
    $gerenciadorcelular->deletarCelular($indice);

    header('Location: index.php');
    exit;
}
?>