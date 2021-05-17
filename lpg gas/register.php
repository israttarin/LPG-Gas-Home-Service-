 <!DOCTYPE html>
<html>
<head>
<title>register Form Design</title>
    <link rel="stylesheet" type="text/css" href="register.css">
<body>

	<?php
			include("include/config.php");
            include("include/Database.php");
            
        ?>

        <?php

            $db= new Database();
            if(isset($_POST['submit'])){
                $cusername = mysqli_real_escape_string($db->link, $_POST['username']);  
                $cpassword = mysqli_real_escape_string($db->link, $_POST['password']);  
                $cemail = mysqli_real_escape_string($db->link, $_POST['email']);  
                $cmobile = mysqli_real_escape_string($db->link, $_POST['mob']); 
				
                if($cusername==''|| $cpassword==''|| $cemail==''|| $cmobile==''){
                    $error="Field must not be Empty !!";
                }else{
                    $query = "INSERT INTO register(username,password,email,mob) Values('$cusername','$cpassword','$cemail','$cmobile')";
                    $create = $db->insert($query);
                }
            }

        ?>
	
	 <div  class="nav">
	    <ul>
		   <li><a href="layout.php">Home</a> </li>
		   <li><a href="register.php"> Register</a> </li>
		   <li><a href="booking.php"> Booking </a> </li>
		   <li><a href="contactus.php">Contact us</a> </li>		   
		</ul>
	  </div>
    <div class="registerinbox">
	
		<form action="" method="post">
        <h1>Register  Here</h1>
            <p>Username</p>
            <input type="text" name="username" placeholder="Enter Username">
            <p>Password</p>
            <input type="password" name="password" placeholder="Enter Password">
			<p>Email</p>
			<input type="text" name="email" placeholder="Enter Email">
			<p>Mobile</p>
			<input type="number" name="mob" placeholder="Enter mobile number">
			<input type="submit" name="submit" value="submit">
        </form>
        
    </div>
	
</body>
</head>
</html>