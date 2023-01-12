<?php
					session_start();
					$host = "localhost";  
					$user = "root";  
					$password = "";
					$db_name = "organi5";
					$user_id = $_SESSION['user_id']; 
					$prod_id = "1";
					$con = mysqli_connect($host, $user, $password, $db_name);  
					if(mysqli_connect_errno()) {  
						die("Failed to connect with MySQL: ". mysqli_connect_error());  
					}
					$sql = "INSERT INTO cart VALUES ('".$user_id."','".$prod_id."');";
					if ($con->query($sql) === TRUE) {
					   include "consumer_cart.php";
					} else {
					  echo "Error: " . $sql . "<br>" . $conn->error;
					}
				?>