<!DOCTYPE html ><!--PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">-->
<?php include "header.php"; ?>

    <link href="/css/style.css" rel="stylesheet">


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
<?php 
			  	error_reporting(E_ERROR);
				    	require_once('connection.php');

    		$remarks=$_GET['remark'];
			$query=mysql_query("select * from  stdinfo where stdinfo.id='$remarks'");
    		?>	
      <div style="margin-top:5%">
            <h1 class="con"> <?php  while ($row = mysql_fetch_array($query)) {
	
			echo $row['name'];} ?> </h1>
        
         </div>
         
<?php 
			  	error_reporting(E_ERROR);
    		$remarks=$_GET['remark'];
    		?>	




       </div>


       <div id="content_grey">
        <?php include "footer.php"; ?>
    <br style="clear:both"/>
    </div><!--close content_grey-->   
 
  </div><!--close main-->
  
  
  
</body>
</html>
