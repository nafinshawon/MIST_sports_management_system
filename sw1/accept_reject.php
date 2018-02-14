 <!DOCTYPE html ><!--PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">-->
<?php include "header.php"; ?>
<div id="menubar">
  
      <ul id="menu">
        <!--<a href="index.php"><img src="images/mistlogo.png" alt="" width="180" height="170"/></a>-->
        <li ><a href="index.php">Home</a></li>
        <li class="current"><a href="year_schedule.php">Year Schedule</a></li>
        <li  ><a href="archive.php">Archive</a></li>
        <li><a href="signup.php">Sign Up</a></li>
      </ul>
    </div><!--close menubar-->

    <div id="slideshow">
    <ul class="slideshow">
        <li class="show"><img width="920" height="250" src="images/home_1.jpg" alt="&quot;Enter your caption here&quot;" /></li>
        <li><img width="920" height="250" src="images/home_2.jpg" alt="&quot;Enter your caption here&quot;" /></li>
      </ul> 
    </div><!--close slidesho-->     
  
  <div id="header">
    <div id="banner">
      <div id="welcome">
        <h1>MIST Sports Management System</h1>
      </div><!--close welcome-->
    </div><!--close banner-->
    </div><!--close header-->

    <div id="site_content">  

      <div style="margin-top:5%">
            <h1 class="con">Player Selection </h1>
        
         </div>

		 
		 		<h2>Football</h2>
					  
<section id="one" class="wrapper style1">
<div class="container">
<header class="major special">
				<form action="checkbox_value1.php" method="post">
								<table class="">
									<thead>
										<tr>
											<th>ID</th>
											<th>Name</th>
										</tr>
									</thead>
									<tbody>

<?php
	  	error_reporting(E_ERROR);

include('connection.php');
//$connection = mysql_connect("localhost", "root", ""); // Eastablishing Connection With Server.
//$db = mysql_select_db("simple_login", $connection); // Selecting Database From Server.

//SQL query for deletion.
?> <?php
//$query = mysql_query("select * from applied"); // SQL query to fetch data to display in menu.
$query = mysql_query("select * from applied1 inner join stdinfo on applied1.id=stdinfo.id"); // SQL query to fetch data to display in menu.
while ($row = mysql_fetch_array($query)) {
	?>
	<tr>
	<td> <input type="checkbox" name="check_list[]" value="<?php echo $row['id']; ?>"> <?php echo $row['id']; ?><br>  </td>
	<td><?php echo $row['name']; ?></td>


											
	</tr>
	<?php 
//echo "<b>date:{$row['datee']}<br />  title:{$row['n_title']}</a> <br />  Description:{$row['n_description']}</a><br/>";
//echo "<b><a href=\"adminindex.php?del={$row['notice_id']}\"><input type=\"button1\" class=\"submit\" value=\"Delete\"/></a></b>"; 

//echo "<b><a href=\"update.php?id={$row['notice_id']}\"><input type=\"button1\" class=\"submit\" value=\"Update\"/></a></b> </b><br /><br />"; 
//echo "<br />";
}
?>

</div><?php
include ('checkbox_value1.php');

// Closing Connection with Server.
mysql_close();
?>
</table>
			<input type="submit" name="submit" Value="selected list"/>
<?php //include '';?>
</form>

<h4>In selected List </h4>
<table class="">
									<thead>
										<tr>
											<th>ID</th>
											<th>Name</th>
										</tr>
									</thead>
									

<?php
	  	error_reporting(E_ERROR);

include('connection.php');
//$connection = mysql_connect("localhost", "root", ""); // Eastablishing Connection With Server.
//$db = mysql_select_db("simple_login", $connection); // Selecting Database From Server.

//SQL query for deletion.
?> <?php
	 
//$connection = mysql_connect("localhost", "root", ""); // Eastablishing Connection With Server.
//$db = mysql_select_db("simple_login", $connection); // Selecting Database From Server.
if (isset($_GET['del'])) {
$del = $_GET['del'];
//SQL query for deletion.
$query1 = mysql_query("delete from finallist where id=$del");
} 
$query = mysql_query("select * from finallist inner join stdinfo on finallist.id=stdinfo.id");
while ($row = mysql_fetch_array($query)) {
	?>
	<tr>

<td><?php echo $row['id']; ?></td>

<td><?php echo $row['name']; ?></td>

<td><?php echo "<b><a href=\"accept_reject.php?del={$row['id']}\"><input type=\"button\" class=\"submit\" value=\"Delete\"/></a></b>"; ?></td>

											
	</tr>
	<?php 
//echo "<b>date:{$row['datee']}<br />  title:{$row['n_title']}</a> <br />  Description:{$row['n_description']}</a><br/>";
//echo "<b><a href=\"adminindex.php?del={$row['notice_id']}\"><input type=\"button1\" class=\"submit\" value=\"Delete\"/></a></b>"; 

//echo "<b><a href=\"update.php?id={$row['notice_id']}\"><input type=\"button1\" class=\"submit\" value=\"Update\"/></a></b> </b><br /><br />"; 
//echo "<br />";
}
?>

</div><?php


// Closing Connection with Server.
mysql_close();
?>
		 
		 
		<h2>In selected List</h2>

      </div><!--close content_container-->  

    </div>

<tbody>

    
  
  
</body>
</html>
