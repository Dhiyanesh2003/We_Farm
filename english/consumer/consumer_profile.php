<html>
	<head>
		<title>We Farm</title>
		<link rel="shortcut icon" href="logo.jpeg" />
		<link rel="preconnect" href="https://fonts.googleapis.com">
		<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
		<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap" rel="stylesheet">
		<link rel="preconnect" href="https://fonts.googleapis.com">
		<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
		<link href="https://fonts.googleapis.com/css2?family=Outfit&display=swap" rel="stylesheet">
		<style>
			
			.Details{
				font-size: 25px;
				margin-left: 30%;
				margin-top: 10px;
				width: 40%;
				margin-bottom: 0px;
				display: grid;
				grid-template-columns: 1fr 1fr;
			}
			.det{
				padding: 10px;
				text-align: left;
				margin-top: 20px;
				margin-bottom: 20px;
				margin-left: 50px;
			}
			.btn{
				font-size: 20px;
				width: 200px;
				height: 50px;
				border-radius: 10px;
				color: white;
				background-color: black;
				box-shadow: 0 12px 16px 0 rgba(0,0,0,0.24),0 17px 50px 0 rgba(0,0,0,0.1);
			}
			.btn:hover{
				color: black;
				background-color: white;
				border: 1px solid;
			}
			
			
			
			.aa{
				padding-top: 10px;
				text-align: center;
				font-size: 20px;
				object-fit: cover;
				text-decoration: none;
				color: black;
				border-botom: 1px solid #5FC81E;
			}
			.aa:hover{
				cursor: pointer;
				color: #5FC81E;
			}
			.contt{
				display: grid;
				grid-template-columns: 1fr 1fr 1fr 1fr 1fr 1fr 1fr 5fr;
				position: -webkit-sticky;
				position: sticky;
				top: 0;
				width: 100%;
			}
			.h1{
				color: #00e639;
				text-align: center;
				font-size: 30px;
				font-family: 'Pacifico', cursive;
				margin-top: 10px;
			}
			.search{
				height: 50px;
				text-align: center;
				font-size: 25px;
			}
			
			*{
				font-family: 'Poppins', sans-serif;
			}
			.bl{
				color: black;
				font-size: 35px;
			}
			.gr{
				color: #5FC81E;
				font-size: 45px;
			}
			.find{
				height: 40px;
				font-size: 15px;
				width: 300px;
				margin-top: 25px;
				margin-left: 150px;
			}
			.onto{
				position: absolute;
				bottom: 0px;
				left: 0px;
				font-size: 20px;
				color: #5FC81E;
				opacity: 0.9;
				width: 350px;
				background-color: black;
			}
			h2{
				margin: 0px;
			}
			.search-box{
				display: grid;
				grid-template-columns: 3fr 1fr;
				margin-top: 5px;
			}
			.search-btn{
				height: 40px;
				width: 100px;
				margin-top: 25px;
				background-color: black;
				color: #5FC81E;
				font-size: 15px;
				text-decoration: bold;
				border-radius: 5px;
			}
			.search-btn:hover{
				cursor: pointer;
			}
			.current{
				cursor: pointer;
				color: #5FC81E;
			}
		</style>
	</head>
	<body>
		<header>
			<div class="contt">
				<div>
					<h1 class="h1"><span class="bl">Organi</span><span class="gr">5</span></h1>
				</div>
				<a class="aa" href="consumer_home.php">
					<div class="item">
						<h4>Home</h4>
					</div>
				</a>
				<a class="aa" href="consumer_orders.html">
					<div class="item">
						<h4>Orders</h4>
					</div>
				</a>
				<a class="aa" href="consumer_offers.html">
					<div class="item">
						<h4>Offers</h4>
					</div>
				</a>				
				<a class="aa" href="consumer_forum.html">
					<div class="item">
						<h4>Forum</h4>
					</div>
				</a>
				<a class="aa" href="consumer_cart.html">
					<div class="item">
						<h4>Cart</h4>
					</div>
				</a>
				<a class="aa current" href="consumer_profile.html">
					<div class="item">
						<h4>Profile</h4>
					</div>
				</a>
				<div class="search">
					<div class="search-box">
						<input type="text" class="find" placeholder="Search" />
						<button type="button" class="search-btn">Search</button>
					</div>
				</div>
			</div>
		</header><hr>
		<main>
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
					$user_id = $_SESSION['user_id']; 
					$password = $_SESSION['password'];
					$sql = "select * from loginform where username = '".$user_id."' and pass = '".$password."'";  
					$result = mysqli_query($con, $sql);  
					$row = mysqli_fetch_assoc($result);  
					$count = mysqli_num_rows($result);
					if($count == 1){
						echo "
							<form class='Details'>
								<label class='det'>User Name: </label>
								<input class='det' type='text' value='".$row["username"]."' disabled/>
								<label class='det'>Phone Number: </label>
								<input class='det' type='text' value='".$row["phone"]."' disabled/>
								<label class='det'>E-mail ID: </label>
								<input class='det' type='text' value='".$row["email"]."' disabled/>
								<label class='det'>Shipping Address: </label>
								<input class='det' type='text' value='".$row["address"]."' disabled/><br>
							</form>
						";
					}  
					else{  
						echo "<h1> Login failed. Invalid username or password.</h1>";  
					}   
				}
				
				
				
				
				
				
			?>
			
			<form action="">
				<center><input class="btn" type="submit" value="Edit" /></center>
			</form>
			<br><hr>
		</main>
	</body>
</html>