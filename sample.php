<!DOCTYPE html>
<html>
<body>
<form action="" method="POST">
<input type="text" name="my_text" required>
<input type="submit" value="send">
</form>
<?php
if($_SERVER["REQUEST_METHOD"]=="POST") {
$user_input=$_POST["my_text"];
echo $user_input;
}
?>
</body>
</html>