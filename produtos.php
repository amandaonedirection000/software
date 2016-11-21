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
                    <li><a class="active" href="produtos.php">Produtos</a></li>
                    <li><a href="servicos.php">Serviços</a></li>
                    <li><a href="orcamentos.php">Orçametos</a></li>
                    <li><a href="contato.php">Contato</a></li>
                </ul>
            </div>
            <div id="content">
                <form action="action_page.php" id="formcliente">
                    <fieldset>
                        <legend align="center">CADASTRO DE CLIENTES</legend>
                        <label for="fname">Código:</label>
                        <br>
                        <input type="text" id="fname" name="codigo"/>
                        <br>
                        <label for="country">Tipo:</label>
                        <br>
                        <input type="text" id="fname" name="tpessoa">
                        <br>
                        <label for="lname">Preço de Custo:</label>
                        <br>
                        <input type="text" id="lname" name="cpf"/>
                        <br>
                        <label for="country">Preço de Venda:</label>
                        <br>
                        <input type="text" id="fname" name="endereco"/>
                        <br>
                        <label for="country">Quantidade em Estoque:</label>
                        <br>
                        <input type="text" id="fname" name="endereco"/>
                        <br>
                        <br>
                        <input type="submit" value="Submit">
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
