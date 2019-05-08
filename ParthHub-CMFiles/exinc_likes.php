<?php
include('connection.php');
$id=$_POST['exid'];
$stmt = $DBcon->prepare("UPDATE experience SET likes=likes+1 WHERE active = 1 AND exid='$id'");
 

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