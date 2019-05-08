<?php
session_start();
require("connection.php");
	if(isset($_POST["return_sbmt"])){
			
			$enroll = strtoupper(mysqli_real_escape_string($conn,$_POST['enroll']));
			$id;
			if(isset($_GET['id'])){
			 $id = mysqli_real_escape_string($conn,$_GET['id']);
			}
			else{
				$id = mysqli_real_escape_string($conn,$_POST['id']);
			}
			
			  $sql = "SELECT * FROM users WHERE enrollment = '$enroll'";
			$query = mysqli_query($conn,$sql) or die(mysqli_error($conn));
			  $result=mysqli_num_rows($query);

			  if($result!=0){
				  $run = mysqli_fetch_assoc($query);
				  $bks=$run['issued_books'];
				  $count=$run['total_issued_books'];
				  $dts = $run['book_issued_dates'];
				  
				if($bks!=null){
						$books = explode(",",$bks);
						$dates = explode(",",$dts);
						$allbk =null;
						$alldt=null;
						$i=0;
						$flag=0;
						$x=0;
					foreach($books as $book){
						
						if($book == $id && $x==0){
							$x=1;
							$flag=1;
							$i++;
							continue;
						}
						else{
							if($i+1 == $count){
								$allbk.=$book;
								$alldt.=$dates[$i];
								
							}
							else{
								$allbk.=$book.",";
								$alldt.=$dates[$i].",";
							}
						}
						$i++;
					}
					if($flag==1){
						$count--;
						$sql = "UPDATE users SET issued_books='$allbk', total_issued_books='$count',book_issued_dates='$alldt'  WHERE enrollment = '$enroll'";
						
						
						$sql2 = "UPDATE books SET book_available_qty=CAST(book_available_qty+1 AS SIGNED) WHERE book_id = '$id'";
						$query = mysqli_query($conn,$sql) or die(mysqli_error($conn));
						$query = mysqli_query($conn,$sql2) or die(mysqli_error($conn));
						$_SESSION['success']= "Book Returned Successfully.";
						header("location:profile.php");
					}
					else{
						$_SESSION['error']= "Error! User does not have this book.";
				  
						header("location:profile.php");
					}
				}
				
			  }
			  else{
				  $_SESSION['error']= "Authentication! Enrollment Number is incorrect.";
				  
				  header("location:profile.php");
			  }
		}
		
	
?>