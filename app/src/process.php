<?php
include 'create_database.php';
include_once 'database.php';
if(isset($_POST['save']))
{	 
	 $first_name = $_POST['first_name'];
	 $last_name = $_POST['last_name'];
	 $grades = $_POST['grades'];
	 $sql = "INSERT INTO student (first_name,last_name,grades)
	 VALUES ('$first_name','$last_name','$grades')";
	 if (mysqli_query($conn, $sql)) {
		echo "New record created successfully !";
	 } else {
		echo "Error: " . $sql . "
" . mysqli_error($conn);
	 }
	 mysqli_close($conn);
}
shell_exec('docker-compose exec db mysqldump -u root -p sqlpw mysql > dump.sql');
?>

<html>
<body>
<a href="http://localhost:8888/students.php">
     <input type="submit"/>
   </a>
  </body>
</html>