
<html>

<body>

  <body style = "font-family:times, times new roman, serif;" bgcolor="#C0C0C0" text="#008000" >

<?php

if (empty($_POST["name"])) {

  echo "<br>Name field needs to be filled in!";

}
  elseif (empty($_POST["feedback"])) {

echo "<br>Feedback field needs to be filled in!";

}

else {

?>

<br>

Welcome <?php echo $_POST["name"]; ?><br>

<br>

We appreciate your feedback.<br>

<?php

}

?>

</body>

</html>