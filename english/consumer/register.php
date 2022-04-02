<?php
$servername = "sql110.epizy.com";
$username = "epiz_31427880";
$password = "5Jr6wSCXHg";
$dbname = "epiz_31427880_demo";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
$USERNAME= $_POST['USERNAME']; 
$PASSWORD= $_POST['PASSWORD'];
$NUMBER= $_POST['NUMBER'];
$EMAIL= $_POST['EMAIL'];
$ADDRESS= $_POST['ADDRESS'];
$P1=$_POST['P1'];
$sql = "INSERT INTO register VALUES ('".$USERNAME."','".$PASSWORD."','".$P1."','".$NUMBER."','".$EMAIL."','".$ADDRESS."')";
if ($conn->query($sql) === TRUE) {
  include "consumer_home.html";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>