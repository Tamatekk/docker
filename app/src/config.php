<?php

session_start();

$host = "mysql"; /* Host name */
$user = "root"; /* User */
$password = "sqlpw"; /* Password */
$dbname = "mysql"; /* Database name */

$con = mysqli_connect($host, $user, $password,$dbname);
// Check connection

$sql= "
CREATE TABLE IF NOT EXISTS `users` (
    `id` int(11) NOT NULL,
    `username` varchar(80) NOT NULL,
    `name` varchar(80) NOT NULL,
    `password` varchar(80) NOT NULL
  ) ENGINE=InnoDB DEFAULT CHARSET=latin1;
  ";
$sql2 = "INSERT INTO `users` (id, username, name, password) VALUES (1, 'Tama', 'Tama', '12345');
";
if ($con->query($sql) === TRUE) {
    $con->query($sql2);
  } else {
    echo "Error connecting to DB: " . $con->error;
  }