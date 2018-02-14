

    <?php
    session_start();
    include('connection.php');
	 $mobilen=$_POST['mobilen'];

    $name=$_POST['name'];
	$id=$_POST['id'];
	$gender=$_POST['gender'];
	$dept=$_POST['dept'];
	$sessionn=$_POST['sessionn'];
	$email=$_POST['email'];
	$mobile=$_POST['mobile'];
	$password=$_POST['password'];
    $prevreport=$_POST['record'];
	$rank=$_POST['rank'];

    $query=mysql_query("INSERT INTO stdinfo(id, name, gender, dept, sessionn, email, mobile, password, prevreport, yearr, rank)VALUES('$id', '$name', '$gender', '$dept', '$sessionn', '$email', '$mobile', '$password', '$prevreport', '2016', '$rank' )");

    if($query) {header("location: regsuccess.php?remarks=success"); }
    mysql_close($con);
    ?>