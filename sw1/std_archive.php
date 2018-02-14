<!DOCTYPE html ><!--PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">-->
<?php include "header.php"; ?>

<style> 
input[type=text] {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    box-sizing: border-box;
    border: 2px solid red;
    border-radius: 4px;
     background-color: #f1f1f1;    

}

select {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    box-sizing: border-box;
    border: 2px solid red;
    border-radius: 4px;
    background-color: #f1f1f1;
    color:grey;
}

</style>
<div id="menubar">
  <ul id="menu">
       <?php 
			  	error_reporting(E_ERROR);
				    	require_once('connection.php');
    		$remarks=$_GET['remark']; ?>
		<li><a href="studentindex.php?remark=<?php echo $remarks; ?>">Home</a></li>
        <li><a href="stdinfo.php?remark=<?php echo $remarks; ?>">Personal info</a></li>
        <li  class="current"><a href="std_archive.php?remark=<?php echo $remarks; ?>">Previous Records</a></li>
        <li ><a href="apply.php?remark=<?php echo $remarks; ?>">Apply</a></li>
        <li><a href="index.php">Logout</a></li>
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

<div style="margin-top:2%">
            <h1 class="con">Previous Records</h1>
         </div>

  





<table>
  <tr>
    <th>Name</th>
    <th>ID</th>
    <th>Year</th>
    <th>Event  Name</th>
  </tr>

<?php 

error_reporting(E_ERROR);

            include('connection.php');

          //  if(isset($_POST['id']))
			{
			//$id=$_POST['id'];
//$query=mysql_query("select * from stdinfo where stdinfo.id='$id'");
			$query=mysql_query("select * from finallist inner join stdinfo on finallist.id=stdinfo.id inner join applied1 on stdinfo.id=applied1.id  where stdinfo.id='$remarks'");
				//$query = mysql_query("select * from finallist inner join stdinfo on finallist.id=stdinfo.id inner join applied on stdinfo.id=applied.id  where stdinfo.id='$id'"); // SQL query to fetch data to display in menu.
while ($row = mysql_fetch_array($query)) {
	?>
	<tr>
		<th><?php echo $row['name']; ?></th>
		<th><?php echo $row['id']; ?></th>
		<th><?php echo $row['yearr']; ?></th>
		<th><?php echo $row['category']; ?></th>
	</tr>
<?php     $f=1;
}
			}
			
		 
?>
</table>
  
 
  </div><!--close main-->
  
   <div id="content_grey">
        <?php include "footer.php"; ?>
    <br style="clear:both"/>
    </div><!--close content_grey-->   
 
  
</body>
</html>
