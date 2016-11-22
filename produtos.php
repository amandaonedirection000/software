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
                    <li><a class="active" href="produtos.php">Produtos</a></li>
                    <li><a href="servicos.php">Serviços</a></li>
                    <li><a href="orcamentos.php">Orçametos</a></li>
                    <li><a href="contato.php">Contato</a></li>
                </ul>
            </div>
            <div id="content">
                <h2 class="titulo1">CADASTRO DE PRODUTOS</h2>
                <form action="action_page.php" id="formcliente">
                    <fieldset>
                        
                        <label>Código:</label>
                        <br>
                        <select name="cars">
                            <option value="celular">1</option>
                            <option value="notebook">2</option>
                            <option value="tablet">3</option>
                            <option value="pcmesa">4</option>
                            <option value="pendrive">5</option>
                            <option value="impressora">6</option>
                            <option value="mouse">7</option>
                            <option value="joystick">8</option>
                        </select>
                        <br>
                        <label>Tipo:</label>
                        <br>
                        <input type="text" class="cmppq" name="tpessoa">
                        <br>
                        <label>Preço de Custo:</label>
                        <br>
                        <input type="text" class="cmppq" name="cpf"/>
                        <br>
                        <label>Preço de Venda:</label>
                        <br>
                        <input type="text" class="cmppq" name="endereco"/>
                        <br>
                        <label>Quantidade em Estoque:</label>
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
