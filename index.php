<html>
<head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
</head>
    <body>
    <form name="formulario" action="processa.php" method="get">
        <table>
        <tr>
        <th colspan="2">Sugestões e/ou Opiniões</th>
        </tr>
        <tr>
        <td><label>Nome:</label></td>
        <td><input type="text" name="nome"  size="40" maxlength="30"></td>
        </tr>

        <tr>
        <td><label>E-mail:</label></td>
        <td><input type="text" name="email" size="40" maxlength="30"></td>
        </tr>

        <tr>
        <td><label>Telefone:</label></td>
        <td><input type="text" name="ddd" size="2" maxlength="2">
        <input type="text" name="numero" size="8" maxlength="8"></td>
        </tr>

        <tr>
        <td><label>Sugestão e/ou Reclamação:</label></td>
        <td><textarea name="feedback" cols="140" rows="5" > </textarea>
        </tr>


        <tr>
        <td><label>Qualidade do serviço:</label></td>
        <td><input type="radio" name="qualidade" value="pessimo"> Péssimo
        <input type="radio" name="qualidade" value="ruim"> Ruim
        <input type="radio" name="qualidade" value="razoavel"> Razoável
        <input type="radio" name="qualidade" value="bom"> Bom
        <input type="radio" name="qualidade" value="otimo"> Ótimo</td>
        </tr>

		<tr>
		<td> <input type="button" class="button" value="Enviar"> </td>
		</tr>

    </form>

</body>
</html>
