<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <link rel="stylesheet" href="css/estilo.css" media="all" type="text/css">
    </head>
    <body>
        <div id="container">
            <div id="header">
                <img src="img/SA.jpg"/>

            </div>
            <div id="menu">
                <ul>
                    <li><a href="index.php">Home</a></li>
                    <li><a href="clientes.php">Clientes</a></li>
                    <li><a href="funcionarios.php">Funcionários</a></li>
                    <li><a href="produtos.php">Produtos</a></li>
                    <li><a class="active" href="servicos.php">Serviços</a></li>
                    <li><a href="orcamentos.php">Orçametos</a></li>
                    <li><a href="contato.php">Contato</a></li>
                </ul>
            </div>
            <div id="content">
                <h2 class="titulo1">CADASTRO DE SERVIÇOS</h2>
                <form action="action_page.php" id="formcliente">
                    <fieldset>
                        <label>Código:</label>
                        <br>
                        <select name="servicos">
                            <option value="vendaeletronicos">Venda</option>
                            <option value="formatacao">Formatação</option>
                            <option value="fiat">Manutenção</option>
                            <option value="audi">Instalação</option>
                        </select>
                        <br>
                        <label>Descrição:</label>
                        <br>
                        <input type="text" class="cmppq" name="cpf"/>
                        <br>
                        <label>Preço:</label>
                        <br>
                        <input type="text" class="cmppq" name="endereco"/>
                        <br>
                        <br>
                        <button type="submit">Enviar</button>
                        <button type="reset">Apagar</button>
                    </fieldset>
                </form>
            </div>
            <div id="footer">
                <p>2016 &copy; - Todos os direitos reservados.</p>
            </div>
        </div>

        <?php
        // put your code here
        ?>
    </body>
</html>
