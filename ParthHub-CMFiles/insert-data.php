<?php
include('connection.php');
$name=$_POST['name'];
$email=$_POST['email'];
$messages=$_POST['messages'];
$phone=$_POST['phone'];
$actual_link = $_POST['page'];
 
$stmt = $DBcon->prepare("INSERT INTO users_comment(name,email,mob_no,messages,page) VALUES(:name, :email,:phone,:messages,:actual_link)");
 
$stmt->bindparam(':name', $name);
$stmt->bindparam(':email', $email);
$stmt->bindparam(':phone', $phone);
$stmt->bindparam(':messages', $messages);
$stmt->bindparam(':actual_link', $actual_link);
if($stmt->execute())
{
  $res="Thank you for your comment! Your comment will be displayed only after manual approval.";
  echo json_encode($res);
}
else {
  $error="Some Problem occur.";
  echo json_encode($error);
}
 
 
 ?>