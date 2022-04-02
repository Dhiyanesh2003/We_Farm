<?php   
    
    $host = "sql110.epizy.com";  
    $user = "epiz_31427880";  
    $password = "5Jr6wSCXHg";  
    $db_name = "epiz_31427880_demo"; 
    $con = mysqli_connect($host, $user, $password, $db_name);  
    if(mysqli_connect_errno()) {  
        die("Failed to connect with MySQL: ". mysqli_connect_error());  
    }
    else{
        
        $user_id = $_POST['user_id']; 
        $password = $_POST['password'];
        $sql = "select * from loginform where User = '".$user_id."' and Pass = '".$password."'";  
        $result = mysqli_query($con, $sql);  
        $row = mysqli_fetch_assoc($result);  
        $count = mysqli_num_rows($result);
        if($count == 1){  
            
            include "consumer_home.html";
        }  
        else{  
            echo "<h1> Login failed. Invalid username or password.</h1>";  
        }   
    }
?>