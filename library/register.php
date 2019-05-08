<?php
session_start();
	require("connection.php");
	function input_data($data) {
  		 $data = trim($data);
  		 $data = stripslashes($data);
		 $data = htmlspecialchars($data);
   		 return $data;
	}
		if(isset($_POST["submit"])){
				
				$name = input_data(trim(mysqli_real_escape_string($conn,$_POST["name"])));
				$uname = input_data(trim(mysqli_real_escape_string($conn,$_POST["uname"])));
			   $email = input_data(trim(mysqli_real_escape_string($conn,$_POST["email"])));
			$password = input_data(trim(mysqli_real_escape_string($conn,$_POST["pass"])));
			$enroll = strtoupper(trim(mysqli_real_escape_string($conn,$_POST["clgID"])));
			
			
				
			
			$sql="INSERT INTO users(name,username,password,email,enrollment) VALUES('$name','$uname','$password','$email','$enroll')";
			
			
			if(mysqli_query($conn,$sql))
				{
					header("location:index.php?page=register");
			
				}
			else
				{	
					echo "error";
		
				}
		}

		
?>