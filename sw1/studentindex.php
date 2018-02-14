<!DOCTYPE html ><!--PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">-->
<?php include "header.php"; ?>

<div id="menubar">
	
      <ul id="menu">
        <!--<a href="index.php"><img src="images/mistlogo.png" alt="" width="180" height="170"/></a>-->
		 <?php 
			  	error_reporting(E_ERROR);
				    	require_once('connection.php');
    		$remarks=$_GET['remark']; ?>
		<li class="current"><a href="studentindex.php?remark=<?php echo $remarks; ?>">Home</a></li>
        <li><a href="stdinfo.php?remark=<?php echo $remarks; ?>">Personal info</a></li>
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

	  <div class="sidebar_container">       
		<div class="sidebar">
          <div class="sidebar_item">
            <h2>Top Headlines</h2>
            <p >Sports week has been started</p>
            <ul style="list-style-type:disc">
 				 <li>Inter department Football will be started from </br> 7th April </li>
 				 <li>Application is open now</li>
 				 <li>Form your team</li>
			</ul>
          </div><!--close sidebar_item--> 
        </div><!--close sidebar--> 

		<div class="sidebar">
          <div class="sidebar_item">
            <h2>Next Game</h2>
            <h3>June 2016</h3>
            <p>Table Tennis for male will be started soon.</p>         
		  </div><!--close sidebar_item--> 
        </div><!--close sidebar--> 

        <div class="sidebar">
          <div class="sidebar_item">
           <a href="index.php"> <h2>Log out</h2> </a>
           
		   </div><!--close sidebar_item--> 
        </div><!--close sidebar-->
       </div><!--close sidebar_container-->		 
	 <?php 
			  	error_reporting(E_ERROR);
				    	require_once('connection.php');

    		$remarks=$_GET['remark'];
			$query=mysql_query("select * from  stdinfo where stdinfo.id='$remarks'");
    		?>	
      <div style="margin-top:5%">
            <h1 class="con" align="justify"> <?php  while ($row = mysql_fetch_array($query)) {
	
			echo $row['name'];} ?> </h1>
        
         </div>
		 
         
<?php 
			  	error_reporting(E_ERROR);
    		$remarks=$_GET['remark'];
    		?>	
	  <div id="content">
        <div class="content_item">
        	
		  <h1 class="con">Apply</h1> 
		  
		  <div class="content_image">
		    <img src="images/content_image1.jpg" alt="image1"/>
	      </div>
		  <h1 style="font-size: 30px;">Football</h1>
		  <p>A team of 11 members has to be formed from each department.</p>

		  <div class="content_container">
		     
		  	<div class="button_small">
		      <a href="apply.php?remark=<?php echo $remarks; ?>">Apply</a>
		    </div><!--close button_small-->
		  </div><!--close content_container-->
		  <br style="clear:both"/>
		  <div style="margin-bottom:7%;"></div>
		  <div class="content_image">
		    <img src="images/content_image1.jpg" alt="image1"/>
	      </div>
		  <h1 style="font-size: 30px;">Cricket </h1>
		  <p>Application process has been started.</p>

		  <div class="content_container">
		     
		  	<div class="button_small">
		      <a href="apply.php?remark=<?php echo $remarks; ?>">Apply</a>
		    </div><!--close button_small-->
		  </div><!--close content_container-->
          <br style="clear:both"/>
		  <!--
		  <div class="content_container">
		    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque cursus tempor enim. Aliquam facilisis neque non nunc posuere eget volutpat metus tincidunt.</p>
		  	<div class="button_small">
		      <a href="#">Read more</a>
		    </div><!--close button_small-->
		  <!--</div>--><!--close content_container-->

<!--          <div class="content_container">
		    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque cursus tempor enim. Aliquam facilisis neque non nunc posuere eget volutpat metus tincidunt.</p>          
		  	<div class="button_small">
		      <a href="#">Read more</a>
		    </div><!--close button_small-->		  
		  <!--</div><!--close content_container-->			  
		</div><!--close content_item-->
      </div><!--close content-->   
	</div><!--close site_content--> 
    
	<div id="content_grey">
	      <?php include "footer.php"; ?>
	  <br style="clear:both"/>
    </div><!--close content_grey-->   
 
  </div><!--close main-->
  
  
  
</body>
</html>
