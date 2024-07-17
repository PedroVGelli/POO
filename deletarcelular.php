<?php
require 'GerenciadorCelular.php';

if (isset($_GET['indice'])) {
    $indice = $_GET['indice'];

    $gerenciadorcelular = new GerenciadorCelular();
    $gerenciadorcelular->deletarCarro($indice);

    header('Location: index.php');
    exit;
}
?>