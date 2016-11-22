<h2 class="titulo1">Pedidos</h2>
<form action="action_page.php" id="formcliente">
    <fieldset class="tp2">
        <label for="fname">CPF ou CNPJ do Cliente:</label>
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
    <button type="submit">Gravar</button>

</form>

</html>
