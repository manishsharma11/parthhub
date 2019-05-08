<?php
include('connection.php');
$id=$_POST['c_id'];
$stmt = $DBcon->prepare("UPDATE users_comment SET likes=likes+1 WHERE active = 1 AND c_id='$id'");
 

if($stmt->execute())
{
  $res="";
  echo json_encode($res);
}
else {
  $error="";
  echo json_encode($error);
}
			

 
 ?>