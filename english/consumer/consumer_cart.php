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
			
			.btn{
				margin-top: 50px;
				margin-bottom: 50px;
				margin-left: 40%;
				width: 20%;
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
			.main-container{
				display: grid;
				grid-template-columns: 1fr 1fr 1fr 1fr 1fr;
				justify-content: center;
				text-align: center;
				margin-left: 20%;
				margin-top: 50px;
				width: 60%;
				box-shadow: 0 12px 16px 0 rgba(0,0,0,0.24),0 17px 50px 0 rgba(0,0,0,0.1);
				padding-top: 30px;
				padding-bottom: 10px;
			}
			.imgg{
				width: 125px;
				height: 125px;
			}
			.buy{
				margin-left: 40%;
				width: 20%;
				margin-top: 50px;
				height: 50px;
				font-size: 25px;
				color: #00e639;
				background-color: white;
				border-radius: 25px;
				text-align: center;
				box-shadow: 0 12px 16px 0 rgba(0,0,0,0.24),0 17px 50px 0 rgba(0,0,0,0.1);
				font-family: 'Pacifico', cursive;
				margin-bottom: 100px;
			}
			.buy:hover{
				background-color: #00e639;
				color: white;
				cursor: pointer;
				box-shadow: 0 12px 16px 0 rgba(0,0,0,0.24),0 17px 50px 0 rgba(0,0,0,0.1);
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
				<a class="aa" href="consumer_home.html">
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
				<a class="aa current" href="consumer_cart.html">
					<div class="item">
						<h4>Cart</h4>
					</div>
				</a>
				<a class="aa" href="consumer_profile.html">
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
			<div class="main-container">
				<div>
					<p>Image</p><hr>
				</div>
				<div>
					<p>Details</p><hr>
				</div>
				<div>
					<p>Price</p><hr>
				</div>
				<div>
					<p>Quantity</p><hr>
				</div>
				<div>
					<p>Total<p><hr>
				</div>
				<?php
					error_reporting(0);
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
						$sql = "select * from cart where user_id='".$user_id."'";
						$result = mysqli_query($con, $sql);  
						$row = mysqli_fetch_assoc($result);  
						$count = mysqli_num_rows($result);
						if($count >= 1){  
							$sql = "select * from product where prod_id='".$row['prod_id']."'";
							$result = mysqli_query($con, $sql);  
							$row = mysqli_fetch_assoc($result);  
							$count = mysqli_num_rows($result);
							if($count >= 1){  
								echo "
									<div>
										<img class='imgg' src='https://images.unsplash.com/photo-1620574387735-3624d75b2dbc?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=880&q=80' />
									</div>
									<div>
										<p>".$row['name']."</p>
										<p>From Mr.S.Muthu Kumar</p>
									</div>
									<div>
										<p>Rs. ".$row['price']."/kg</p>
									</div>
									<div>
										<p>4 Kgs.</p>
									</div>
									<div>
										<p>Rs. 84<p>
									</div>
								";
							} 
						}
					}
				
				?>
				
				<!--<div>
					<br><hr><img class="imgg" src="https://images.unsplash.com/photo-1620574387735-3624d75b2dbc?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=880&q=80" />
				</div>
				<div>
					<br><hr><p>Potato</p>
					<p>From Mr.S.Muthu Krishnan</p>
				</div>
				<div>
					<br><hr><p>Rs. 30/kg</p>
				</div>
				<div>
					<br><hr><p>3 Kgs.</p>
				</div>
				<div>
					<br><hr><p>Rs. 90<p>
				</div>-->
				<div><br><hr></div>
				<div><br><hr></div>
				<div><br><hr></div>
				<div><br><hr></div>
				<div><br><hr></div>
				<!-- <div><br><hr><p>Sub-Total: </p></div>
				<div>
					<br><hr><p>Rs. 174</p>
				</div>
				<div></div>
				<div></div>
				<div></div>
				<div><p>Processing Fee</p></div>
				<div>
					<p>Rs. 5</p>
				</div>
				<div><hr></div>
				<div><hr></div>
				<div><hr></div>
				<div><hr><p>Total: </p></div>
				<div>
					<hr><p>Rs. 174</p>
				</div>-->
			</div>
			<form action="consumer_cart.php">
				<input class="btn" type="submit" value="Place Order !! " />
			</form>
		</main>
	</body>
</html>