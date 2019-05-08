<?php
session_start();
require("connection.php");
	if(isset($_POST["submit_log"])){
			
			$username = mysqli_real_escape_string($conn,$_POST['username']);
			 $pass = mysqli_real_escape_string($conn,$_POST['pass']);
			 
			  $sql = "SELECT * FROM admin WHERE (username = '$username'  OR clg_id = '$username') AND password= '$pass'";
			$query = mysqli_query($conn,$sql) or die(mysqli_error($conn));
			  $result=mysqli_num_rows($query);

			  if($result!=0){
				  $run = mysqli_fetch_assoc($query);
				  $_SESSION['name'] = $run['name'];
				  header("location:profile.php");
				  
			  }
			  else{
				  $_SESSION['error']= "Authentication! Username or Password is incorrect.";
				  unset($_SESSION['name']);
				  header("location:index.php?page=login");
			  }
		}
?>