<?php 
require_once"class.php";
$conn = new db_class();

$us=json_decode($_POST['email']);
//$user=$us->name;
$conn->getuser($us);
?>