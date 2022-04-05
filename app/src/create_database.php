<?php

$servername='mysql';
$username='root';
$password='sqlpw';
$dbname = 'mysql';

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// sql to create table
$sql = "
CREATE TABLE IF NOT EXISTS `student` (
	`stu_id` INTEGER PRIMARY KEY NOT NULL AUTO_INCREMENT,
	`first_name` varchar(55) NOT NULL,
	`last_name` varchar(55) NOT NULL,
	`grades` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
";

if ($conn->query($sql) === TRUE) {
  echo "";
} else {
  echo "Error creating table: " . $conn->error;
}

$conn->close();

?>