<?php
$servername='mysql';
$username='root';
$password='sqlpw';
$dbname = 'mysql';
$conn = mysqli_connect($servername,$username,$password,$dbname);
if(!$conn){
   die('Could not Connect My Sql:' . mysqli_connect_error());
}
?>