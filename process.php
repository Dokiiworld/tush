<?php 
require_once"class.php";
$conn = new db_class();

$fd=json_decode($_POST['formdata']);
$fname=$fd->fname;
$lname=$fd->lname;
$phone=$fd->phone;
$email=$fd->email;
$password=$fd->password;
$conn->fomo($fname,$lname,$phone,$email,$password);
?>