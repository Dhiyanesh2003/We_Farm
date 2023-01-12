<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "organi5";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
$USER_ID= "123";
$USERNAME= $_POST['USERNAME']; 
$PASSWORD= $_POST['PASSWORD'];
$NUMBER= $_POST['NUMBER'];
$EMAIL= $_POST['EMAIL'];
$ADDRESS= $_POST['ADDRESS'];
$sql = "INSERT INTO loginform VALUES ('".$USER_ID."','".$USERNAME."','".$PASSWORD."','".$NUMBER."','".$EMAIL."','".$ADDRESS."')";
if ($conn->query($sql) === TRUE) {
  include "consumer_login.html";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>