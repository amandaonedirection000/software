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
                    <li><a href="servicos.php">Serviços</a></li>
                    <li><a class="active" href="orcamentos.php">Orçametos</a></li>
                    <li><a href="contato.php">Contato</a></li>
                </ul>
            </div>
            <div id="content">
                <h2 class="titulo1">ORÇAMENTOS</h2>
                <form action="action_page.php" id="formcliente">
                    <fieldset class="tp2">
                        <label for="fname">CPF do Cliente:</label>
                        <br>
                        <input type="text" class="cmppq" name="codigo"/>
                        <br>
                    </fieldset>
                    <br>
                    <fieldset class="tp2">
                        <label for="country">Tipo de Serviço:</label>
                        <br>
                        <select name="cars">
                            <option value="vendaeletronicos">Venda</option>
                            <option value="formatacao">Formatação</option>
                            <option value="fiat">Manutenção</option>
                            <option value="audi">Instalação</option>
                        </select>
                        <br>
                        <br>
                    </fieldset>
                    <br>
                    <fieldset class="tp2">
                        <label for="lname">Código do Produto:</label>
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
                        <br>
                    </fieldset>
                    <br>
                    <br>
                    <button type="submit">Calcular Orçamento</button>

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
