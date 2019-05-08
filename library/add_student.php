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
			   $email = input_data(trim(mysqli_real_escape_string($conn,$_POST["email"])));
			$enroll = strtoupper(trim(mysqli_real_escape_string($conn,$_POST["clgID"])));
			
			
				
			
			$sql="INSERT INTO users(name,password,email,enrollment) VALUES('$name','$enroll','$email','$enroll')";
			
			
			if(mysqli_query($conn,$sql))
				{
					$_SESSION['success']= "Student Added Successfully.";
					header("location:profile.php");
			
				}
			else
				{	
					$_SESSION['error']= "Error!!.";
					header("location:profile.php");
		
				}
		}

		
?>