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
                    <li><a class="active" href="clientes.php">Clientes</a></li>
                    <li><a href="produtos.php">Produtos</a></li>
                    <li><a href="servicos.php">Serviços</a></li>
                    <li><a href="orcamentos.php">Orçametos</a></li>
                    <li><a href="contato.php">Contato</a></li>
                </ul>
            </div>
            <div id="content">

                <form action="action_page.php" id="formcliente">
                    <fieldset>
                        <legend align="center">CADASTRO DE CLIENTES</legend>
                        <label for="fname">Nome Completo:</label>
                        <br>
                        <input type="text" id="fname" name="nome"/>
                        <br>
                        <label for="country">Tipo de pessoa:</label>
                        <br>
                        <input type="text" id="fname" name="tpessoa">
                        <br>
                        <label for="lname">CPF</label>
                        <br>
                        <input type="text" id="lname" name="cpf"/>
                        <br>
                        <label for="country">Endereço:</label>
                        <br>
                        <input type="text" id="fname" name="endereco"/>
                        <br>
                        <label for="country">Cidade:</label>
                        <br>
                        <input type="text" id="fname" name="cidade"/>
                        <br>
                        <label for="country">Estado:</label>
                        <br>
                        <input type="text" id="fname" name="estado"/>
                        <br>
                        <label for="country">Telefone:</label>
                        <br>
                        <input type="text" id="fname" name="celular">
                        <br>
                        <label for="country">E-mail:</label>
                        <br>
                        <input type="text" id="fname" name="email">
                        <br>
                        <label for="country">Celular:</label>
                        <br>
                        <input type="text" id="fname" name="firstname">
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
