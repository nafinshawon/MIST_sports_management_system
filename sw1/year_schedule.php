<!DOCTYPE html ><!--PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">-->
<?php include "header.php"; ?>

<div id="menubar">
  
      <ul id="menu">
        <!--<a href="index.php"><img src="images/mistlogo.png" alt="" width="180" height="170"/></a>-->
        <li ><a href="index.php">Home</a></li>
        <li class="current"><a href="year_schedule.php">Year Schedule</a></li>
        <li><a href="archive.php">Archive</a></li>
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
	
<!--	  <div class="sidebar_container">    -->

 <div style="margin-top:2%">
            <h1 class="con">Year Schedule</h1>
        
         </div>

<table>
  <tr>
    <th style="width:15%;"><h3>Serial No.</h3></th>
    <th><h3>Description</h3></th>
    <th><h3>Date</h3></th>
  </tr>
  
  <?php 
											error_reporting(E_ERROR);

											include('connection.php');
											$serial=1;
										$query1 = mysql_query("select * from schedule");
										while ($row1 = mysql_fetch_array($query1)) {
										?>
											<tr>
											<td><?php echo $serial; ?></td>
											<td><?php echo $row1['description']; ?></td>
											<td><?php echo $row1['datee']; ?></td>
											
										</tr>
										<?php $serial=$serial+1; ?>
										<?php
										}
										mysql_close();
										?>

</table>


<div class="content_container" style="margin-bottom:3%">
         
        <div class="button_small" style="font-weight:700">
          <a href="plogin.php">Apply</a>
        </div><!--close button_small-->
      </div><!--close content_container-->  





	</div><!--close main-->
  <div id="content_grey">
        <?php include "footer.php"; ?>
    <br style="clear:both"/>
    </div><!--close content_grey-->   
 
  
   
  
  </body>
</html>
