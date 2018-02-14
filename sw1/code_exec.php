

    <?php
    session_start();
    include('connection.php');
    $id=$_GET['remark'];

    $category=$_POST['category'];
	$query=mysql_query("select * from stdinfo where stdinfo.id ='$id'");
	while ($row = mysql_fetch_array($query)) {
	
			$name= $row['name'];
			} 
	
	mysql_query("INSERT INTO applied1(id, name, category)VALUES('$id' ,'$name', '$category')");
    header("location: apply.php?remark=$id");
    mysql_close($con);
    ?>