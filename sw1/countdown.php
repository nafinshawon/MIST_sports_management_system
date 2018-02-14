<?php


			  	error_reporting(E_ERROR);

$mysqli=new mysqli('localhost','root','','simple_login');
$result= $mysqli->query("INSERT INTO `countdown`(`id`, `value`) VALUES ('1', '1')");
echo "Countdown has started";
header("location: admin_index.php?remarks=success");

?>
