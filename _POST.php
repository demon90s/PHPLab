<html>
<body>

<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>"
NAME: <input type="test" name="fname">
<input type="submit">
</form>

<?php
$name = $_POST['fname'];
echo $name;
?>

</body>
</html>