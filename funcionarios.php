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
                    <li><a class="active" href="funcionarios.php">Funcionários</a></li>
                    <li><a href="produtos.php">Produtos</a></li>
                    <li><a href="servicos.php">Serviços</a></li>
                    <li><a href="orcamentos.php">Orçametos</a></li>
                    <li><a href="contato.php">Contato</a></li>
                </ul>
            </div>
            <div id="content">
                <h2 class="titulo1">CADASTRO DE CLIENTES</h2>
                <form action="action_page.php" id="formcliente">
                    <fieldset>
                        <label>Nome Completo:</label>
                        <br>
                        <input type="text" class="cmpgr" name="nome"/>
                        <br>
                        <label>Código:</label>
                        <br>
                        <input type="text" class="cmppq" name="codigo"/>
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
                        <input type="text" class="cmpgr" name="email"/>
                        <br>
                        <label>Salário:</label>
                        <br>
                        <input type="text" class="cmpgr" name="salario"/>
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
