<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "tigerhacks";


$conn = mysqli_connect($servername, $username, $password, $database);

if(!$conn){
  die("Connection Failed: " . mysqli_connect_error());
}

$sql = "INSERT INTO test (test) VALUES (". $_GET[name] . ");";

mysquli_query($conn, $sql);
?>
