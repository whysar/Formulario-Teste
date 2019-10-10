
<html>
<body>
<?php
if (empty($_POST["name"])){
  echo "<br>Name field needs to be filled in!";
}
  elseif (empty($_POST["feedback"])){
echo "<br>Feedback field needs to be filled in!";
}
else {
?>
Welcome <?php echo $_POST["name"]; ?><br>
We appreciate your feedback.<br>
<?php
}
?>
</body>
</html>