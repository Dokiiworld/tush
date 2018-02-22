<?php 
require_once"class.php";
$conn = new db_class();
$name=$_POST['name'];
$email=$_POST['email'];
$conn->save_user($name,$email);
?>