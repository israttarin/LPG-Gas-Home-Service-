<!DOCTYPE html>
<html>
<head>
<title> Employee Login Form Design</title>
    <link rel="stylesheet" type="text/css" href="employe.css">
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
                
                if($cusername==''|| $cpassword==''){
                    $error="Field must not be Empty !!";
                }else{
                    $query = "INSERT INTO employeelogin(username,password) Values('$cusername','$cpassword')";
                    $create = $db->insert($query);
                }
            }

        ?>
	<div class="nav">
	    <ul>
		   <li><a href="layout.php">Home</a> </li>
		   <li><a href="employe.php">Employee </a> </li>
		   <li><a href="booking.php"> Booking </a> </li>
		   <li><a href="contactus.php">Contact us</a> </li>
		   
		   
		</ul>
	</div>
    <div class=" employelogin">
   
        <h1>Employee Login </h1>
        <form action="" method="post">
            <p>Username</p>
            <input type="text" name="username" placeholder="Enter Username">
            <p>Password</p>
            <input type="password" name="password" placeholder="Enter Password">
            <input type="submit" name="submit" value="Login">
            <a href="#">forgetpassword</a><br>
            <a href="register.php">Don't have an account?</a>
        </form>
        
        
    </div>

</body>
</head>
</html>