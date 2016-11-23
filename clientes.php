<h1>Lista de Clientes</h1>
<hr>
<a href="?pg=addClientes" class="button"><i class="fa fa-plus fa-lg"></i> Adicionar</a>
<hr>
<?php
require_once 'dao/DaoCliente.php';
$DaoCliente = DaoCliente::getInstance();
$dados = $DaoCliente->listar();
?>
<table>
    <tr>
        <th>Código</th>
        <th>Nome</th>
        <th>Endereço</th>
        <th>Cidade</th>
        <th>Telefone</th>
        <th>E-mail</th>
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
        echo "<td><a href='?pg=editClientes&id=$id' title='Editar'><i class='fa fa-pencil fa-lg'></i></a>"
        . " <a href='?pg=delClientes&id=$id' title='Excluir' onclick='return confirm(\"Deseja excluir?\")'><i class='fa fa-trash fa-lg'></i></a></td>";
        echo "</tr>";
    }
    ?>
</table>