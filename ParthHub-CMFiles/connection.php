<?php
 
$DB_host = "localhost";
$DB_user = "root";
$DB_pass = "";
$DB_name = "parth_db";
$conn = mysqli_connect($DB_host, $DB_user, $DB_pass,$DB_name) or die("Connection failed: " . mysqli_connect_error());
 try
 {
     $DBcon = new PDO("mysql:host={$DB_host};dbname={$DB_name}",$DB_user,$DB_pass);
     $DBcon->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
 }
 catch(PDOException $e)
 {
     echo "ERROR : ".$e->getMessage();
 }
 ?>