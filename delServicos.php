<?php

$id = $_GET["id"];
require_once 'dao/DaoServico.php';
$DaoServico= DaoServico::getInstance();
$exe = $DaoServico->deletar($id);
if ($exe) {
    echo "<script type='text/javascript'>"
    . " alert('Excluído com Sucesso!');"
    . "location.href='?pg=servicos';"
    . "</script>";
} else {
    echo "<script type='text/javascript'>"
    . " alert('Não foi possível excluir!');"
    . "location.href='?pg=servicos';"
    . "</script>";
}
