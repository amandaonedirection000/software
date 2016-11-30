
<h1 class="titulo1">Lista de Funcionários</h1>
<hr>
<a href="?pg=addfuncionarios" class="button"><i class="fa fa-plus fa-lg"></i> Adicionar</a>
<hr>
<?php
require_once 'dao/DaoFuncionario.php';
$DaoFuncionario = DaoFuncionario::getInstance();
$dados = $DaoFuncionario->listar();
?>
<table>
    <tr>
        <th>Código</th>
        <th>Nome</th>
        <th>Endereço</th>
        <th>Cidade</th>
        <th>Telefone</th>
        <th>E-mail</th>
        <th>Cargo</th>
        <th>Salário</th>
        <th>Ações</th>
    </tr>
    <?php
    foreach ($dados as $row) {
        $id = $row["id"];
        echo "<tr>";
        echo "<td>" . $row["id"] . "</td>";
        echo "<td>" . $row["nome"] . "</td>";
        echo "<td>" . $row["endereco"] . "</td>";
        echo "<td>" . $row["cidade"] . "</td>";
        echo "<td>" . $row["telefone"] . "</td>";
        echo "<td>" . $row["email"] . "</td>";
        echo "<td>" . $row["cargo"] . "</td>";
        echo "<td>" . $row["salario"] . "</td>";
        echo "<td><a href='?pg=editFuncionarios&id=$id' title='Editar'><i class='fa fa-pencil fa-lg'></i></a>"
        . " <a href='?pg=delFuncionarios&id=$id' title='Excluir' onclick='return confirm(\"Deseja excluir?\")'><i class='fa fa-trash fa-lg'></i></a></td>";
        echo "</tr>";
    }
    ?>
</table>

