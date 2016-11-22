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
