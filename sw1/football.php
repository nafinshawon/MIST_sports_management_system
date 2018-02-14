<!DOCTYPE html ><!--PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">-->
<?php include "header.php"; ?>

<div id="menubar">
	
      <ul id="menu">
        <!--<a href="index.php"><img src="images/mistlogo.png" alt="" width="180" height="170"/></a>-->
        <li class="current"><a href="index.php">Home</a></li>
        <li><a href="year_schedule.php">Year Schedule</a></li>
        <li><a href="archive.php">Archive</a></li>
        <li ><a href="livescore.php">Live Score</a></li>
        <li><a href="signup.php">Sign Up</a></li>
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
            <p >ekhane news database theke fetch hobe.top koyekta news ashbe.</p>
            <ul style="list-style-type:disc">
 				 <li>News 1</li>
 				 <li>News 2</li>
 				 <li>News 3</li>
			</ul>
          </div><!--close sidebar_item--> 
        </div><!--close sidebar--> 

		<div class="sidebar">
          <div class="sidebar_item">
            <h2>Next Game Countdown</h2>
            <h3>June 2012</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque cursus tempor enim.</p>         
		  </div><!--close sidebar_item--> 
        </div><!--close sidebar--> 

        <div class="sidebar">
          <div class="sidebar_item">
            <h2>Log In</h2>
           <p style="margin-top:-8%;"><a href="plogin.php"><h3>LogIn as Player</h3></a></p>
           <p style="margin-top:-13%;"><a href="alogin.php"><h3>LogIn as Admin</h3></a></p>
          </div><!--close sidebar_item--> 
        </div><!--close sidebar-->
       </div><!--close sidebar_container-->		 
	 <?php 
			  	error_reporting(E_ERROR);
				    	require_once('connection.php');

    		$remarks=$_GET['remark'];
			$query=mysql_query("select * from  stdinfo where stdinfo.id='$remarks'");
    		?>	
     
         
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
		      <a href="football.php">Apply</a>
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
		      <a href="#">Apply</a>
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
