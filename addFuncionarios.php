<h2 class="titulo1">CADASTRO DE FUNCIONÁRIOS</h2>
<form  id="formcliente" method="post">
    <fieldset>
        <label>Código:</label>
        <br>
        <input type="text" class="cmppq" name="id"/>
        <br>
        <label>Nome Completo:</label>
        <br>
        <input type="text" class="cmpgr" name="nome"/>
        <br>
        <label>Endereço:</label>
        <br>
        <input type="text" class="cmpgr" name="endereco"/>
        <br>
        <label>Cidade:</label>
        <br>
        <input type="text" class="cmppq" name="cidade"/>
        <br>
        <label>Estado:</label>
        <br>
        <input type="text" class="cmppq" name="estado"/>
        <br>
        <label>Telefone:</label>
        <br>
        <input type="text" class="cmppq" name="telefone"/>
        <br>
        <label>E-mail:</label>
        <br>
        <input type="email" class="cmpgr" name="email"/>
        <br>
        <label>Cargo:</label>
        <br>
        <input type="text" class="cmpgr" name="cargo"/>
        <br>
        <label>Salário:</label>
        <br>
        <input type="text" class="cmpgr" name="salario"/>
        <br>
        <label>Login:</label>
        <br>
        <input type="text" class="cmpgr" name="login"/>
        <br>
        <label>Senha:</label>
        <br>
        <input type="text" class="cmpgr" name="senha"/>
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
    $funcionario->setId($_POST["id"]);
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
    $exe = $DaoFuncionario->inserir($funcionario);
    if ($exe) {
        echo "<script type='text/javascript'>"
        . " alert('Cadastrado com Sucesso!');"
        . "location.href='?pg=funcionarios';"
        . "</script>";
    } else {    
        echo "<script type='text/javascript'>"
        . " alert('Não foi possível cadastrar!');"
        . "</script>";
    }
}
