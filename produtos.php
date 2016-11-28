<h1>Lista de Produtos</h1>
<hr>
<a href="?pg=addprodutos" class="button"><i class="fa fa-plus fa-lg"></i> Adicionar</a>
<hr>
<?php
require_once 'dao/DaoProduto.php';
$DaoProduto = DaoProduto::getInstance();
$dados = $DaoProduto->listar();
?>
<table>
    <tr>
        <th>Código</th>
        <th>Tipo do Produto</th>
        <th>Preço de Compra</th>
        <th>Preço de Venda</th>
        <th>Quantidade em Estoque</th>
    </tr>
    <?php
    foreach ($dados as $row) {
        $id = $row["id"];
        echo "<tr>";
        echo "<td>" . $row["id"] . "</td>";
        echo "<td>" . $row["tipoproduto"] . "</td>";
        echo "<td>" . $row["precocompra"] . "</td>";
        echo "<td>" . $row["precovenda"] . "</td>";
        echo "<td>" . $row["quantidadeestoque"] . "</td>";
        echo "<td><a href='?pg=editProdutos&id=$id' title='Editar'><i class='fa fa-pencil fa-lg'></i></a>"
        . " <a href='?pg=delProdutos&id=$id' title='Excluir' onclick='return confirm(\"Deseja excluir?\")'><i class='fa fa-trash fa-lg'></i></a></td>";
        echo "</tr>";
    }
    ?>
</table>

