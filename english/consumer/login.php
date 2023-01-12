<?php   
	session_start();
    $host = "localhost";  
    $user = "root";  
    $password = "";
    $db_name = "organi5"; 
    $con = mysqli_connect($host, $user, $password, $db_name);  
    if(mysqli_connect_errno()) {  
        die("Failed to connect with MySQL: ". mysqli_connect_error());  
    }
    else{
        
        $_SESSION['user_id'] = $_POST['user_id']; 
        $_SESSION['password'] = $_POST['password'];
        $sql = "select * from loginform where username = '".$_SESSION['user_id']."' and pass = '".$_SESSION['password']."'";  
        $result = mysqli_query($con, $sql);  
        $row = mysqli_fetch_assoc($result);  
        $count = mysqli_num_rows($result);
        if($count == 1){  
			echo "<script> location.href='consumer_home.php'; </script>";
			exit;
        }  
        else{  
            echo "<h1> Login failed. Invalid username or password.</h1>";  
        }   
    }
?>