<?php
$id = $_GET["id"];
require_once 'dao/DaoServico.php';
$DaoServico = DaoServico::getInstance();
$atualizar = $DaoServico->getServico($id);
?>
<h2 class="titulo1">EDIÇÃO DE SERVIÇOS</h2>
<form id="formcliente" method="post">
    <fieldset>
        <label>Descrição:</label>
        <br>
        <input type="text" class="cmppq" name="descricao" required value="<?=$atualizar["descricao"]?>"/>
        <br>
        <label>Preço:</label>
        <br>
        <input type="text" class="cmpgr" name="preco" required value="<?=$atualizar["preco"]?>"/>
        <br>
        <br>
        <button type="submit" name="botao">Enviar</button>
    </fieldset>
</form>
<?php
require_once 'dao/DaoServico.php';
require_once 'model/Servico.php';
if (isset($_POST["botao"])) {
    $servico = new Produto();
    $servico->setId($_POST["id"]);
    $servico->setDescricao($_POST["descricao"]);
    $servico->setPreco($_POST["preco"]);
    $DaoServico = DaoServico::getInstance();
    $exe = $DaoServico->atualizar($servico);
    if ($exe) {
        echo "<script type='text/javascript'>"
        . " alert('Atualizado com Sucesso!');"
        . "location.href='?pg=servicos';"
        . "</script>";
    } else {    
        echo "<script type='text/javascript'>"
        . " alert('Não foi possível atualizar!');"
        . "</script>";
    }
}
