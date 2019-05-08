<?php
session_start();
require("connection.php");
	if(isset($_POST["issue_sbmt"])){
			
			$enroll = strtoupper(mysqli_real_escape_string($conn,$_POST['enroll']));
			$id;
			if(isset($_GET['id'])){
			 $id = mysqli_real_escape_string($conn,$_GET['id']);
			}
			else{
				$id = mysqli_real_escape_string($conn,$_POST['id']);
			}
			$sql2 = "SELECT * FROM books where book_id='$id'";
			$query2 = mysqli_query($conn,$sql2) or die(mysqli_error($conn));
			$row2=mysqli_fetch_assoc($query2);
			echo $id;
		if($row2['book_available_qty']>0){
			  $sql = "SELECT * FROM users WHERE enrollment = '$enroll'";
			$query = mysqli_query($conn,$sql) or die(mysqli_error($conn));
			  $result=mysqli_num_rows($query);

			  if($result!=0){
				  $run = mysqli_fetch_assoc($query);
				  $books=$run['issued_books'];
				  $count=$run['total_issued_books'];
				  $date = $run['book_issued_dates'];
				  if($books==null){
					  $books=$id;
				  }
				  else{
					  $books.=",".$id;
				  }
				  if($date==null){
					$date = date("d-m-Y");
				  }
				  else{
					$date.=",".date("d-m-Y");
				  }
				
				$count++;
				if($count < 6){
					$sql = "UPDATE users SET issued_books='$books', total_issued_books='$count',book_issued_dates='$date'  WHERE enrollment = '$enroll'";
					
					
					$sql2 = "UPDATE books SET book_available_qty=CAST(book_available_qty-1 AS SIGNED) WHERE book_id = '$id'";
					$query = mysqli_query($conn,$sql) or die(mysqli_error($conn));
					$query = mysqli_query($conn,$sql2) or die(mysqli_error($conn));
					$_SESSION['success']= "Book Issued Successfully.";
					header("location:profile.php");
				}
				else{
					$_SESSION['error']= "Error!!! Six books are already issued.";
					header("location:profile.php");
				}
			  }
			  else{
				  $_SESSION['error']= "Authentication! Enrollment Number is incorrect.";
				  
				  header("location:profile.php");
			  }
		}
		else{
			$_SESSION['error']= "Sorry!!! This book is not available.";
			header("location:profile.php");	  
				  
		}
	}
?>