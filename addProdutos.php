<h2 class="titulo1">CADASTRO DE PRODUTOS</h2>
<form  id="formcliente" method="post">
    <fieldset>
        <label>Tipo do Produto:</label>
        <br>
        <input type="text" class="cmpgr" name="tipoproduto"/>
        <br>
        <label>Preço de Custo:</label>
        <br>
        <input type="text" class="cmpgr" name="precocusto"/>
        <br>
        <label>Preço de Venda:</label>
        <br>
        <input type="text" class="cmppq" name="precovenda"/>
        <br>
        <label>Quantidade em Estoque:</label>
        <br>
        <input type="text" class="cmppq" name="quantidadeestoque"/>
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
    $produto->setTipoproduto($_POST["tipoproduto"]);
    $produto->setPrecocompra($_POST["precocompra"]);
    $produto->setPrecovenda($_POST["precovenda"]);
    $produto->setQuantidadeestoque($_POST["quantidadeestoque"]);   
    $DaoProduto = DaoProduto::getInstance();
    $exe = $DaoProduto->inserir($produto);
    if ($exe) {
        echo "<script type='text/javascript'>"
        . " alert('Cadastrado com Sucesso!');"
        . "location.href='?pg=produtos';"
        . "</script>";
    } else {    
        echo "<script type='text/javascript'>"
        . " alert('Não foi possível cadastrar!');"
        . "</script>";
    }
}
