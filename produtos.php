<h1 class="titulo1">Lista de Produtos</h1>
<hr>
<a href="?pg=addProdutos" class="button"><i class="fa fa-plus fa-lg"></i> Adicionar</a>
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
        <th>Descrição</th>
        <th>Marca</th>
        <th>Modelo</th>
        <th>Fornecedor</th>
        <th>Preço de Compra</th>
        <th>Preço de Venda</th>
        <th>Quantidade em Estoque</th>
        <th>Imagem</th>
        <th>Ações</th>
    </tr>
    <?php
    foreach ($dados as $row) {
        $id = $row["id"];
        echo "<tr>";
        echo "<td>" . $row["id"] . "</td>";
        echo "<td>" . $row["tipo"] . "</td>";
        echo "<td>" . $row["descricao"] . "</td>";
        echo "<td>" . $row["marca"] . "</td>";
        echo "<td>" . $row["modelo"] . "</td>";
        echo "<td>" . $row["fornecedor"] . "</td>";
        echo "<td>" . $row["preco_custo"] . "</td>";
        echo "<td>" . $row["preco_venda"] . "</td>";
        echo "<td>" . $row["quantidade_estoque"] . "</td>";
        echo "<td><img width='80' height='80' src='fotosprodutos/{$row["imagem"]}'/></td>";
        echo "<td><a href='?pg=editProdutos&id=$id' title='Editar'><i class='fa fa-pencil fa-lg'></i></a>"
        . " <a href='?pg=delProdutos&id=$id' title='Excluir' onclick='return confirm(\"Deseja excluir?\")'><i class='fa fa-trash fa-lg'></i></a></td>";
        echo "</tr>";
    }
    ?>
</table>

