<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <link rel="stylesheet" href="css/estilo.css" media="all" type="text/css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">
    </head>
    <body>
        <div id="container">
            <div id="header">
                <img src="img/SA.jpg"/>

            </div>
            <div id="menu">
                <ul>
                    <li><a class="<?= ($_GET["pg"] == "home" || empty($_GET["pg"])) ? "active" : "" ?>" href="?pg=home">Home</a></li>
                    <li><a class="<?= ($_GET["pg"] == "clientes") ? "active" : "" ?>" href="?pg=clientes">Clientes</a></li>
                    <li><a class="<?= ($_GET["pg"] == "funcionarios") ? "active" : "" ?>" href="?pg=funcionarios">Funcionários</a></li>
                    <li><a class="<?= ($_GET["pg"] == "produtos") ? "active" : "" ?>" href="?pg=produtos">Produtos</a></li>
                    <li><a class="<?= ($_GET["pg"] == "servicos") ? "active" : "" ?>" href="?pg=servicos">Serviços</a></li>
                    <li><a class="<?= ($_GET["pg"] == "pedidos") ? "active" : "" ?>" href="?pg=pedidos">Pedidos</a></li>
                    <li><a class="<?= ($_GET["pg"] == "contato") ? "active" : "" ?>" href="?pg=contato">Contato</a></li>
                </ul>
            </div>
            <div id="content">
                <?php
                    @$pg = $_GET["pg"];
                    if(isset($pg)&&!empty($pg)) {
                        include_once $pg.".php";
                    } else {
                        include_once 'home.php';
                    }
                ?>
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
