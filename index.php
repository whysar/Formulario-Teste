<html>
<head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
</head>
    <body>
    <form name="form" action="/script.php" method="post">
        <table>
        <tr>
        <th colspan="2">Feedback</th>
        </tr>
        <tr>
        <td><label>Name:</label></td>
        <td><input type="text" name="name" id="name" size="40" maxlength="30" required></td>
        </tr>

        <tr>
        <td><label>E-mail:</label></td>
        <td><input type="text" name="email"  size="40" maxlength="30"></td>
        </tr>

        <tr>
        <td><label>Telephone:</label></td>
        <td><input type="text" name="ddd" size="2" maxlength="2">
        <input type="text" name="number" size="8" maxlength="8"></td>
        </tr>

        <tr>
        <td><label>Feedback:</label></td>
        <td><textarea name="feedback" cols="40" rows="5" required> </textarea>
        </tr>


        <tr>
        <td><label>Service Quality:</label></td>
        <td><input type="radio" name="quality" value="terrible"> Terrible
        <input type="radio" name="quality" value="bad"> Bad
        <input type="radio" name="quality" value="reasonable"> Reasonable
        <input type="radio" name="quality" value="good"> Good
        <input type="radio" name="quality" value="great"> Great</td>
        </tr>

		<tr><td>
        <input type="submit" name="Register" id="Register" value="Submit" /> </td>
		</tr>

    </form>

</body>
</html>
