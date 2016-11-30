<h2 class="titulo1">CADASTRO DE SERVIÇOS</h2>
<form  id="formcliente" method="post" enctype="multipart/form-data">
    <fieldset>
        <label>Descrição:</label>
        <br>
        <input type="text" class="cmpgr" name="descricao"/>
        <br>
        <label>Preço:</label>
        <br>
        <input type="text" class="cmpgr" name="preco"/>
        <br>
        <label>Imagem:</label>
        <input type="file" name="imagem" required/>
        <br/>
        <button type="submit" name="botao">Enviar</button>
    </fieldset>
</form>
<?php
require_once 'dao/DaoServico.php';
require_once 'model/Servico.php';
if (isset($_POST["botao"])) {
    $servico = new Servico();
    $servico->setDescricao($_POST["descricao"]);
    $servico->setPreco($_POST["preco"]);  
    $servico->setImagem($_FILES["imagem"]["name"]);
    
    /***upload de imagem**/
    $pastaDestino = "fotosservicos/";
    $arquivoDestino = $pastaDestino.basename($_FILES["imagem"]["name"]);  
    move_uploaded_file($_FILES["imagem"]["tmp_name"], $arquivoDestino);
    chown($arquivoDestino, 777);    
    /***fim do upload***/
    
    $DaoServico = DaoServico::getInstance();
    $exe = $DaoServico->inserir($servico);
    if ($exe) {
        echo "<script type='text/javascript'>"
        . " alert('Cadastrado com Sucesso!');"
        . "location.href='?pg=servicos';"
        . "</script>";
    } else {    
        echo "<script type='text/javascript'>"
        . " alert('Não foi possível cadastrar!');"
        . "</script>";
    }
}

