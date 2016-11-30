<?php
$id = $_GET["id"];
require_once 'dao/DaoCliente.php';
$DaoCliente = DaoCliente::getInstance();
$atualizar = $DaoCliente->getCliente($id);
?>
<h2 class="titulo1">EDIÇÃO DE CLIENTES</h2>
<form id="formcliente" method="post">
    <fieldset>
        <label>Nome Completo:</label>
        <br>
        <input type="text" class="cmpgr" name="nome" required value="<?=$atualizar["nome"]?>"/>
        <br>
        <label>CPF ou CNPJ:</label>
        <br>
        <input type="text" class="cmppq" name="cpf_cnpj" required value="<?=$atualizar["cpf_cnpj"]?>"/>
        <br>
        <label>Endereço:</label>
        <br>
        <input type="text" class="cmpgr" name="endereco" required value="<?=$atualizar["endereco"]?>"/>
        <br>
        <label>Cidade:</label>
        <br>
        <input type="text" class="cmppq" name="cidade" required value="<?=$atualizar["cidade"]?>"/>
        <br>
        <label>Estado:</label>
        <br>
        <input type="text" class="cmppq" name="estado" required value="<?=$atualizar["estado"]?>"/>
        <br>
        <label>Telefone:</label>
        <br>
        <input type="text" class="cmppq" name="telefone" required value="<?=$atualizar["telefone"]?>">
        <br>
        <label>E-mail:</label>
        <br>
        <input type="email" class="cmpgr" name="email" required value="<?=$atualizar["email"]?>">
        <br>
        <br>
        <button type="submit" name="botao">Enviar</button>
    </fieldset>
</form>
<?php
require_once 'dao/DaoCliente.php';
require_once 'model/Cliente.php';
if (isset($_POST["botao"])) {
    $cliente = new Cliente();
    $cliente->setId($id);
    $cliente->setNome($_POST["nome"]);
    $cliente->setCpf_cnpj($_POST["cpf_cnpj"]);
    $cliente->setEndereco($_POST["endereco"]);
    $cliente->setCidade($_POST["cidade"]);
    $cliente->setEstado($_POST["estado"]);
    $cliente->setTelefone($_POST["telefone"]);
    $cliente->setEmail($_POST["email"]);    
    $DaoCliente = DaoCliente::getInstance();
    $exe = $DaoCliente->atualizar($cliente);
    if ($exe) {
        echo "<script type='text/javascript'>"
        . " alert('Atualizado com Sucesso!');"
        . "location.href='?pg=clientes';"
        . "</script>";
    } else {    
        echo "<script type='text/javascript'>"
        . " alert('Não foi possível atualizar!');"
        . "</script>";
    }
}
