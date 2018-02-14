<!DOCTYPE html ><!--PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">-->
<?php include "header.php"; ?>

<style>
table {
    font-family: arial, sans-serif;
    border-collapse: collapse;
    width: 98%;
    margin: 0 20px 20px 0px;
    
   
}

td, th {
    border: 0px solid #dddddd;
    text-align: left;
    padding: 5px;
    width:15px;
}

tr:nth-child(even) {
    background-color: transparent;
}



</style>

<div id="menubar">
	
     <?php 
			  	error_reporting(E_ERROR);
				require_once('connection.php');
    		$remarks=$_GET['remark'];
				    	 ?>
      <ul id="menu">
        <!--<a href="index.php"><img src="images/mistlogo.png" alt="" width="180" height="170"/></a>-->
        <li ><a href="studentindex.php?remark=<?php echo $remarks; ?>">Home</a></li>
        <li class="current"><a href="stdinfo.php?remark=<?php echo $remarks; ?>">Personal info</a></li>
        <li><a href="std_archive.php?remark=<?php echo $remarks; ?>">Previous Records</a></li>
        <li ><a href="apply.php?remark=<?php echo $remarks; ?>">Apply</a></li>
        <li><a href="index.php">Logout</a></li>
      </ul>
    </div><!--close menubar-->	

    <div id="slideshow">
	  <ul class="slideshow">
        <li class="show"><img width="920" height="250" src="images/home_1.jpg" alt="&quot;Football&quot;" /></li>
        <li><img width="920" height="250" src="images/home_2.jpg" alt="&quot;Cricket&quot;" /></li>
      </ul> 
    </div><!--close slidesho-->		  
	
	<div id="header">
	  <div id="banner">
	    <div id="welcome">
	      <h1>MIST Sports Management System</h1>
	    </div><!--close welcome-->
	  </div><!--close banner-->
    </div><!--close header-->
    
	<div id="site_content" >		
	

          <div  style="margin-top:2%;margin-left:35%;">
            <h1 class="con" style="padding-left:10%;">Student Profile</h1>
          
          </div><!--close sidebar_item--> 
        
       	 
	  <div id="content">
        <div class="content_item">
        	
<table>
 
 <?php

 include ('connection.php');
$query=mysql_query("select * from  stdinfo where stdinfo.id='$remarks'");

    		  while ($row = mysql_fetch_array($query)) { ?>
 
  <tr>
    <td><h3>Name:</h3></td>
    <td><?php echo $row['name']; ?></td>
    
  </tr>
  <tr>
     <td><h3>ID:</h3></td>
    <td> <?php echo $row['id']; ?></td>
   
  </tr>
  <tr>
     <td><h3>Dept:</h3></td>
    <td> <?php echo $row['dept']; ?></td>
   
  </tr>
  <tr>
     <td><h3>Gender:</h3></td>
    <td><?php echo 'Male'; ?></td>
   
  </tr>
  <tr>
    <td><h3>Session:</h3></td>
    <td><?php echo $row['sessionn']; ?></td>
   
  </tr>
  <tr>
     <td><h3>Rank:</h3></td>
    <td> <?php echo $row['rank']; ?></td>
   
  </tr>
  <tr>
     <td><h3>Email:</h3></td>
    <td> <?php echo $row['email']; ?></td>
   
  </tr>
  <tr>
    <td><h3>Mobile No:</h3></td>
    <td> <?php echo $row['mobile']; ?></td>
   
  </tr>
   <tr>
     <td><h3>Password:</h3></td>
    <td>  <?php echo $row['password']; ?></td>
   
  </tr>
  	 <?php } ?>
  <?php

 include ('connection.php');
$query1=mysql_query("select * from  applied1 where applied1.id='$remarks'");

    		  while ($row1 = mysql_fetch_array($query1)) { ?>
  
  <tr>
     <td><h3>Applied Events:</h3></td>
    <td> <?php echo $row1['category']; ?></td>
   
  </tr>
  
	 <?php } ?>
  </table>
	   		  
		</div><!--close content_item-->
      </div><!--close content-->   
	</div><!--close site_content--> 
	 
    
	<div id="content_grey">
	      <?php include "footer.php"; ?>
	  <br style="clear:both"/>
    </div><!--close content_grey-->   
 
 
  
  
  
</body>
</html>
