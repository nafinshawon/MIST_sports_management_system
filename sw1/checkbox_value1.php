

<?php

	  	error_reporting(E_ERROR);

include('connection.php');
if(isset($_POST['submit'])){
if(!empty($_POST['check_list'])) {
// Counting number of checked checkboxes.
$checked_count = count($_POST['check_list']);
echo "You have selected following ".$checked_count." option(s): <br/>";
// Loop to store and display values of individual checked checkbox.
foreach($_POST['check_list'] as $selected) {
	$del=$selected ;
echo 'aaa';
$query1 = mysql_query("INSERT INTO finallist ( id )VALUES('$selected')");

}
echo "Moved to trash successfully.";
header("location: accept_reject.php?remarks=success");
}
else{
echo "<b>Please Select Atleast One Option.</b>";
header("location: accept_reject.php?remarks=success");
}
}


//$connection = mysql_connect("localhost", "root", ""); // Eastablishing Connection With Server.
//$db = mysql_select_db("simple_login", $connection); // Selecting Database From Server.

?>

