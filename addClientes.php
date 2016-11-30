
<h2 class="titulo1">CADASTRO DE CLIENTES</h2>
<form id="formcliente" method="post">
    <fieldset>
        <label>Nome Completo:</label>
        <br>
        <input type="text" class="cmpgr" name="nome" required/>
        <br>
        <label>CPF ou CNPJ:</label>
        <br>
        <input type="text" class="cmppq" name="cpf_cnpj" required/>
        <br>
        <label>Endereço:</label>
        <br>
        <input type="text" class="cmpgr" name="endereco" required/>
        <br>
        <label>Cidade:</label>
        <br>
        <input type="text" class="cmppq" name="cidade" required/>
        <br>
        <label>Estado:</label>
        <br>
        <input type="text" class="cmppq" name="estado" required/>
        <br>
        <label>Telefone:</label>
        <br>
        <input type="text" class="cmppq" name="telefone" required>
        <br>
        <label>E-mail:</label>
        <br>
        <input type="email" class="cmpgr" name="email" required>
        <br>
        <br>
        <button type="submit" name="botao">Enviar</button>
        <button type="reset">Apagar</button>
    </fieldset>
</form>
<?php
require_once 'dao/DaoCliente.php';
require_once 'model/Cliente.php';
if (isset($_POST["botao"])) {
    $cliente = new Cliente();
    $cliente->setNome($_POST["nome"]);
    $cliente->setCpf_cnpj($_POST["cpf_cnpj"]);
    $cliente->setEndereco($_POST["endereco"]);
    $cliente->setCidade($_POST["cidade"]);
    $cliente->setEstado($_POST["estado"]);
    $cliente->setTelefone($_POST["telefone"]);
    $cliente->setEmail($_POST["email"]);    
    $DaoCliente = DaoCliente::getInstance();
    $exe = $DaoCliente->inserir($cliente);
    if ($exe) {
        echo "<script type='text/javascript'>"
        . " alert('Cadastrado com Sucesso!');"
        . "location.href='?pg=clientes';"
        . "</script>";
    } else {    
        echo "<script type='text/javascript'>"
        . " alert('Não foi possível cadastrar!');"
        . "</script>";
    }
}
