<html>
  <head>
   <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  </head>

  <body style = "font-family:times, times new roman, serif;" bgcolor="#C0C0C0" text="#008000" > 
    <form name="form" action="/script.php" method="post">

        <table>
         <tr>
          <th colspan="2">Feedback </th>
        </tr>

        <tr>
         <td> 
          <label> Name*:</label> 
         </td>

         <td> 
          <input type="text" name="name" id="name" size="40" maxlength="30" style="height: 20px;" required /> 
         </td>
        </tr>

        <tr>
         <td> 
          <label> E-mail:</label> 
         </td>

         <td> 
          <input type="text" name="email" id="email" size="40" maxlength="30" style="height: 20px;" /> 
         </td>
        </tr>

        <tr>
         <td> 
          <label> Telephone:</label>
         </td>

         <td> 
          <input type="text" name="ddd" id="ddd" size="2" maxlength="2" style="height: 25px;" />
          <input type="text" name="number" id="number" size="9" maxlength="9" style="height: 25px;" /> 
         </td>
        </tr>

        <tr>
         <td> 
          <label> Feedback*: </label> 
         </td>

         <td> 
          <input type= "text" name="feedback" id="feedback" size="40" maxlength="140" style="height: 80px;" required />
         </td> 
        </tr>


        <tr>
         <td> 
          <label> Service Quality:  </label> 
         </td>

         <td> 
          <input type="radio" name="quality" id="quality" value="terrible" /> Terrible
          <input type="radio" name="quality" id="quality" value="bad" /> Bad
          <input type="radio" name="quality" id="quality" value="reasonable" /> Reasonable
          <input type="radio" name="quality" id="quality" value="good" /> Good
          <input type="radio" name="quality" id="quality" value="great" /> Great
         </td>
        </tr>

	<tr>
         <td>
          <input type="submit" name="Register" id="Register" value="Submit" /> 
         </td>
	</tr>

    </form>
  </body>
</html>
