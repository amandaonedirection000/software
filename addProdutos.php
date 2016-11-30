<h2 class="titulo1">CADASTRO DE PRODUTOS</h2>
<form  id="formcliente" method="post" enctype="multipart/form-data">
    <fieldset>
        <label>Tipo do Produto:</label>
        <br>
        <input type="text" class="cmpgr" name="tipoproduto"/>
        <br>
        <label>Descrição:</label>
        <br>
        <input type="text" class="cmpgr" name="descricao"/>
        <br>
        <label>Marca:</label>
        <br>
        <input type="text" class="cmpgr" name="marca"/>
        <br>
        <label>Modelo:</label>
        <br>
        <input type="text" class="cmpgr" name="modelo"/>
        <br>
        <label>Fornecedor:</label>
        <br>
        <input type="text" class="cmpgr" name="fornecedor"/>
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
        <label>Imagem:</label>
        <input type="file" name="imagem" required/>
        <br/>
        <button type="submit" name="botao">Enviar</button>
    </fieldset>
</form>
<?php
require_once 'dao/DaoProduto.php';
require_once 'model/Produto.php';
if (isset($_POST["botao"])) {
    $produto = new Produto();
    $produto->setTipoproduto($_POST["tipoproduto"]);
    $produto->setDescricao($_POST["descricao"]);
    $produto->setMarca($_POST["marca"]);
    $produto->setModelo($_POST["modelo"]);
    $produto->setFornecedor($_POST["fornecedor"]);
    $produto->setPrecocompra($_POST["precocusto"]);
    $produto->setPrecovenda($_POST["precovenda"]);
    $produto->setQuantidadeestoque($_POST["quantidadeestoque"]); 
    $produto->setImagem($_FILES["imagem"]["name"]);
    
    
    /***upload de imagem**/
    $pastaDestino = "fotosprodutos/";
    $arquivoDestino = $pastaDestino.basename($_FILES["imagem"]["name"]);  
    move_uploaded_file($_FILES["imagem"]["tmp_name"], $arquivoDestino);
    chown($arquivoDestino, 777);    
    /***fim do upload***/
    
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
