<?php

$id = $_GET["id"];
require_once 'dao/DaoProduto.php';
$DaoProduto= DaoProduto::getInstance();
$exe = $DaoProduto->deletar($id);
if ($exe) {
    echo "<script type='text/javascript'>"
    . " alert('Excluído com Sucesso!');"
    . "location.href='?pg=produtos';"
    . "</script>";
} else {
    echo "<script type='text/javascript'>"
    . " alert('Não foi possível excluir!');"
    . "location.href='?pg=produtos';"
    . "</script>";
}
