<?php
$id = $_GET["id"];
require_once 'dao/DaoFuncionario.php';
$DaoFuncionario = DaoFuncionario::getInstance();
$atualizar = $DaoFuncionario->getCliente($id);
?>
<h2 class="titulo1">EDIÇÃO DE FUNCIONÁRIOS</h2>
<form id="formcliente" method="post">
    <fieldset>
        <label>Código:</label>
        <br>
        <input type="text" class="cmpgr" name="nome" required value="<?=$atualizar["id"]?>"/>
        <br>
        <label>Nome:</label>
        <br>
        <input type="text" class="cmppq" name="cpf_cnpj" required value="<?=$atualizar["nome"]?>"/>
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
        <label>Cargo:</label>
        <br>
        <input type="text" class="cmpgr" name="cargo" required value="<?=$atualizar["cargo"]?>">
        <br>
        <label>Salário:</label>
        <br>
        <input type="text" class="cmpgr" name="salario" required value="<?=$atualizar["salario"]?>">
        <br>
        <label>Login:</label>
        <br>
        <input type="text" class="cmpgr" name="login" required value="<?=$atualizar["login"]?>">
        <br>
        <label>Senha:</label>
        <br>
        <input type="text" class="cmpgr" name="senha" required value="<?=$atualizar["senha"]?>">
        <br>
        <br>
        <button type="submit" name="botao">Enviar</button>
    </fieldset>
</form>
<?php
require_once 'dao/DaoFuncionario.php';
require_once 'model/Funcionario.php';
if (isset($_POST["botao"])) {
    $funcionario = new Funcionario();
    $funcionario->setId($id);
    $funcionario->setNome($_POST["nome"]);
    $funcionario->setEndereco($_POST["endereco"]);
    $funcionario->setCidade($_POST["cidade"]);
    $funcionario->setEstado($_POST["estado"]);
    $funcionario->setTelefone($_POST["telefone"]);
    $funcionario->setEmail($_POST["email"]);    
    $funcionario->setCargo($_POST["cargo"]);    
    $funcionario->setSalario($_POST["salario"]);    
    $funcionario->setLogin($_POST["login"]);    
    $funcionario->setSenha($_POST["senha"]);    
    $DaoFuncionario = DaoFuncionario::getInstance();
    $exe = $DaoFuncionario->atualizar($funcionario);
    if ($exe) {
        echo "<script type='text/javascript'>"
        . " alert('Atualizado com Sucesso!');"
        . "location.href='?pg=funcionarios';"
        . "</script>";
    } else {    
        echo "<script type='text/javascript'>"
        . " alert('Não foi possível atualizar!');"
        . "</script>";
    }
}
