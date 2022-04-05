<?php
include "config.php";

// Check user login or not
if(!isset($_SESSION['uname'])){
    header('Location: login.php');
}

// logout
if(isset($_POST['but_logout'])){
    session_destroy();
    header('Location: login.php');
}
?>

<!DOCTYPE html>
<html>
  <body>
	<form method="post" action="process.php">
		First name:<br>
		<input type="text" name="first_name">
		<br>
		Last name:<br>
		<input type="text" name="last_name">
		<br>
		Grades:<br>
		<input type="text" name="grades">
		<br><br>
		<input type="submit" name="save" value="submit">
	</form>
	<form method='post' action="">
            <input type="submit" value="Logout" name="but_logout">
    </form>
  </body>
</html>