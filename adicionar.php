<?php 
require 'index.php';
require 'GerenciadorCelular.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $marca = $_POST['marca'];
    $modelo = $_POST['tipodecarregador'];
    $fabricante = $_POST['fabricante'];

    $carro = new Carro($marca, $modelo, $ano, $cor);

    $GerenciadorCelular = new GerenciadorCelular();
    $GerenciadorCelular->adicionarCelular($celulares);

    header('Location: index.php');
    exit;
}

?>