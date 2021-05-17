<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link href="footer.css" rel="stylesheet">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<title>LPG Gas Home Service</title>
		<style>
		
			.head{
				background-color:gray;
				color:white;
				margin-left:20px;
				margin-right:20px;
				padding:40px;
			}
			.head h2{
				font-size:30px;
				font-weight:bold;
				padding-left: 400px;
				padding-top: 0px
			}
			.navi{
				background-color: green;
				color: white;
				margin-left:20px;
				width: 97%;
				height: 65px;
			}
			.navi a{
				color:#FFFFFF;
			}
			.navi h2{
				padding: 5px 30px;
				font-size:20px;
				font-weight:bold;
				float: left;
			}
			.pics{
					background-color: #fefbd8;
					color: black;
					margin-left: 20px;
					width: 97%;
					height:500px;
					float: left;
			}
			.pics h2{
				text-align:center;
				font-size:20px;
				font-weight:bold;
			}
			
			input[type=text], select, textarea {
				width: 100%;
				height:50%
				padding: 12px; 
				border: 1px solid #ccc; 
				border-radius: 4px; 
				box-sizing: border-box;
				margin-top: 6px; 
				margin-bottom: 16px;
				resize: vertical
            }
			input[type=submit] {
			  background-color: #4CAF50;
			  color: white;
			  padding: 12px 20px;
			  border: none;
			  border-radius: 4px;
			  cursor: pointer;
			}
			input[type=submit]:hover {
			  background-color: #45a049;
			}
			.container {
			  border-radius: 5px;
			  background-color: #f2f2f2;
			  padding: 20px;
			}
		</style>
	</head>
	<body>
			<div class="head">
				<h2>Foodie</h2>
			</div>
			<div class="navi">
				<a href="layout.php"><h2>Home</h2></a>
				<a href="Login.php"><h2>Login</h2></a>
				<a href="Booking.php"><h2>Booking</h2></a>
				<a href="Contact us.php"><h2>Contact us</h2></a>
				
				
			</div>
			<div class="pics">
				<div class="container">
					<form action="Contact Us.html" target="_blank" method="get>

					<label for="fname">First Name</label>
					<input type="text" id="fname" name="firstname" placeholder="Your name.." required>

					<label for="lname">Last Name</label>
					<input type="text" id="lname" name="lastname" placeholder="Your last name.." required>
					<label for="mname">Mobile Number</label>
					<input type="text" id="mname" name="mnumber" placeholder="Enter your number.." required>	
					<label for="email"><b>Email</b></label>
					<input type="text" name="email" placeholder="Enter Email.." required>
					<label for="drop your message"><b>Drop your message</b></label>
					<input type="text" name="drop your message" placeholder="Enter Drop your message.." required>
					
					
					<input type="submit" value="Submit">
					
					
					</form>
				</div>
			</div>
			
			<div class="footer">	
				<div class="resources">
					<h2>Resources</h2>
					<a href="About Us.php"><h2>About us</h2></a>
					<a href="Terms of Use.php"><h2>Terms of Use</h2></a>
					<a href="Privacy Policy.php"><h2>Privacy Policy</h2></a>
					<a href="Refund policy.php"><h2>Refund Policy</h2></a>
					<a href="Blog.php"><h2>Blog</h2></a>
				</div>
				<div class="product">
					<h2> Products </h2>
					<a href="Ordering.php"><h2>Ordering</h2></a>
					<a href="Admin Dashboard.php"><h2>Admin Dashboard</h2></a>
				</div>
				<div class="contact">
					<h2>CONTACT US</h2>
					<i class="fa fa-mobile   " aria-hidden="true" style='font-size:36px'> 01975250577</i>
					<i class="fa fa-envelope-open " aria-hidden="true" style='font-size:20px'> isratbhuiyantarin@gmail.com</i>
				</div>
				<h2> Copyright-2019 &copy</h2>
			</div>
	</body>
</html>