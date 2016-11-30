<?php
require_once 'dao/DaoCliente.php';
require_once 'dao/DaoProduto.php';
require_once 'dao/DaoServico.php';
$DaoCliente = DaoCliente::getInstance();
$DaoProduto = DaoProduto::getInstance();
$DaoServico = DaoServico::getInstance();
$dadosClientes = $DaoCliente->listar();
$dadosProdutos = $DaoProduto->listar();
$dadosServicos = $DaoServico->listar();
?>
<h1 class="titulo1">Pedidos</h1>
<form action="action_page.php" id="formcliente">
    <fieldset class="tp2">
        <label>Código do Cliente:</label>
        <br>
        <select name="codigocliente">
            <option value="">Selecione um Cliente</option>
            <?php
                foreach ($dadosClientes as $rowCliente) {
                    echo "<option value='{$rowCliente["id"]}'>{$rowCliente["nome"]}</option>";
                }
            ?>
        </select>
        <br>
        <label>Código do Produto</label>
        <br>
        <select name="codigoproduto">
            <option value="">Selecione um Produto</option>
            <?php
                foreach ($dadosProdutos as $rowProduto) {
                    echo "<option value='{$rowProduto["id"]}'>{$rowProduto["descricao"]}</option>";
                }
            ?>
        </select>
        <br>
        <label>Código do Serviço:</label>
        <br>
        <select name="codigoservico">
            <option value="">Selecione um Serviço</option>
            <?php
                foreach ($dadosServicos as $rowServico) {
                    echo "<option value='{$rowServico["id"]}'>{$rowServico["descricao"]}</option>";
                }
            ?>
        </select>
        <br>
        <br>
        <button type="submit">Gravar</button>
        <br>
    </fieldset>

</form>

</html>
