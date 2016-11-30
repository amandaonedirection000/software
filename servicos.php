<h1 class="titulo1">Lista de Serviços</h1>
<hr>
<a href="?pg=addservicos" class="button"><i class="fa fa-plus fa-lg"></i> Adicionar</a>
<hr>
<?php
require_once 'dao/DaoServico.php';
$DaoServico = DaoServico::getInstance();
$dados = $DaoServico->listar();
?>
<table>
    <tr>
        <th>Código</th>
        <th>Descrição</th>
        <th>Preço</th>
        <th>Imagem</th>
        <th>Ações</th>
    </tr>
    <?php
    foreach ($dados as $row) {
        $id = $row["id"];
        echo "<tr>";
        echo "<td>" . $row["id"] . "</td>";
        echo "<td>" . $row["descricao"] . "</td>";
        echo "<td>" . $row["preco"] . "</td>";
        echo "<td><img width='80' height='80' src='fotosservicos/{$row["imagem"]}'/></td>";
        echo "<td><a href='?pg=editServicos&id=$id' title='Editar'><i class='fa fa-pencil fa-lg'></i></a>"
        . " <a href='?pg=delServicos&id=$id' title='Excluir' onclick='return confirm(\"Deseja excluir?\")'><i class='fa fa-trash fa-lg'></i></a></td>";
        echo "</tr>";
    }
    ?>
</table>

