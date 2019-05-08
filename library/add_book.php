<?php
	session_start();
	require("connection.php");
	function input_data($data) {
  		 $data = trim($data);
  		 $data = stripslashes($data);
		 $data = htmlspecialchars($data);
   		 return $data;
	}
		if(isset($_POST["bk_submit"])){
				
				$id = input_data(trim(mysqli_real_escape_string($conn,$_POST["id"])));
				$book = input_data(trim(mysqli_real_escape_string($conn,$_POST["book_name"])));
			   $author = input_data(trim(mysqli_real_escape_string($conn,$_POST["author_name"])));
			$pub = input_data(trim(mysqli_real_escape_string($conn,$_POST["pub_name"])));
			$price = input_data(trim(mysqli_real_escape_string($conn,$_POST["price"])));
			$qty = input_data(trim(mysqli_real_escape_string($conn,$_POST["qty"])));
			
			
				
			
			$sql="INSERT INTO books(book_id,book_name,book_author_name,book_publication_name,book_price,book_qty,book_available_qty) VALUES('$id','$book','$author','$pub','$price','$qty','$qty')";
			
			
			if(mysqli_query($conn,$sql))
				{	
					$_SESSION['success']= "Book Added Successfully.";
					header("location:profile.php");
			
				}
			else
				{	
					$_SESSION['error']= "Error!!.";
					header("location:profile.php");
		
				}
		}

		
?>