<?php
$id = $_GET["id"];
require_once 'dao/DaoProduto.php';
$DaoProduto = DaoProduto::getInstance();
$atualizar = $DaoProduto->getProduto($id);
?>
<h2 class="titulo1">EDIÇÃO DE PRODUTOS</h2>
<form id="formcliente" method="post">
    <fieldset>
        <label>Código:</label>
        <br>
        <input type="text" class="cmpgr" name="id" required value="<?=$atualizar["id"]?>"/>
        <br>
        <label>Tipo do Produto:</label>
        <br>
        <input type="text" class="cmppq" name="tipoproduto" required value="<?=$atualizar["tipoproduto"]?>"/>
        <br>
        <label>Preço de Compra:</label>
        <br>
        <input type="text" class="cmpgr" name="precocompra" required value="<?=$atualizar["precocompra"]?>"/>
        <br>
        <label>Preço de Venda:</label>
        <br>
        <input type="text" class="cmppq" name="precovenda" required value="<?=$atualizar["precovenda"]?>"/>
        <br>
        <label>Quantidade em  Estoque:</label>
        <br>
        <input type="text" class="cmppq" name="quantidadeestoque" required value="<?=$atualizar["quantidadeestoque"]?>"/>
        <br>
        <br>
        <button type="submit" name="botao">Enviar</button>
    </fieldset>
</form>
<?php
require_once 'dao/DaoProduto.php';
require_once 'model/Produto.php';
if (isset($_POST["botao"])) {
    $produto = new Produto();
    $produto->setId($_POST["id"]);
    $produto->setTipoproduto($_POST["tipoproduto"]);
    $produto->setPrecocompra($_POST["precocompra"]);
    $produto->setPrecovenda($_POST["precovenda"]);
    $produto->setQuantidadeestoque($_POST["quantidadeestoque"]);
    $DaoProduto = DaoProduto::getInstance();
    $exe = $DaoProduto->atualizar($produto);
    if ($exe) {
        echo "<script type='text/javascript'>"
        . " alert('Atualizado com Sucesso!');"
        . "location.href='?pg=produtos';"
        . "</script>";
    } else {    
        echo "<script type='text/javascript'>"
        . " alert('Não foi possível atualizar!');"
        . "</script>";
    }
}
