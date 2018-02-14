<!DOCTYPE html ><!--PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">-->
<?php include "header.php";
$mysqli=new mysqli('localhost','root','','simple_login');
?>

<div id="menubar">
	
      <ul id="menu">
        <!--<a href="index.php"><img src="images/mistlogo.png" alt="" width="180" height="170"/></a>-->
        <li class="current"><a href="index.php">Home</a></li>
        <li><a href="year_schedule.php">Year Schedule</a></li>
        <li><a href="archive.php">Archive</a></li>
        <li><a href="signup.php">Sign Up</a></li>
      </ul>
    </div><!--close menubar-->	

    <div id="slideshow">
	  <ul class="slideshow">
        <li class="show"><img width="920" height="250" src="images/home_1.jpg" alt="" /></li>
        <li><img width="920" height="250" src="images/home_2.jpg" alt="" /></li>
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
            <h2>Final player list</h2>
            <?php
            	$result2= $mysqli->query("select * from liveupdate");
            	$numrows2=$result2->num_rows;
            	if($numrows2>0){
            ?>
            		<a href="Comingwa-template/Comingwa-background-slider/">Click here to see the live scores</a>
           	<?php
            	}
            	else{
            ?>
            		<a href="finalplayer.php">final palyer list here</a>
            <?php
            	}
            ?>
            
            
            
          </div><!--close sidebar_item--> 
        </div><!--close sidebar--> 

		<div class="sidebar">
          <div class="sidebar_item">
            <h2>Countdown for Next Event</h2>
            <?php
            	$result1= $mysqli->query("select * from countdown");
            	$numrows1=$result1->num_rows;
            	if($numrows1>0){
            ?>
            		<a href="Comingwa-template/Comingwa-background-slider/">Countdown Has Started</a>
           	<?php
            	}
            	else{
            ?>
            		<h3>Countdown Has not Started.</h3>
            <?php
            	}
            ?>
            
          </div><!--close sidebar_item--> 
        </div><!--close sidebar--> 

        <div class="sidebar">
          <div class="sidebar_item">
            <h2>Log In</h2>
           <p style="margin-top:-8%;"><a href="plogin.php"><h3>Login as Player</h3></a></p>
           <p style="margin-top:-13%;"><a href="alogin.php"><h3>Login as Admin</h3></a></p>
          </div><!--close sidebar_item--> 
        </div><!--close sidebar-->
       </div><!--close sidebar_container-->		 
	 
	  <div id="content">
        <div class="content_item">
        	
		  <h1 class="con">Upcoming Events</h1> 
		  
		  <div class="content_image">
		    <img src="images/content_image1.jpg" alt="image1"/>
	      </div>
		  <h1 style="font-size: 30px;">Inter Department Football Competition</h1>
		  <?php
		  	$result= $mysqli->query("select * from notice");
		  	$numrows=$result->num_rows;
		  	$row = mysqli_fetch_assoc($result);
		  	$link=$row['n_link'];
		  ?>
		  <div class="content_container">
		     
		  	<div class="button_small">
		  	
		      <a href="<?php echo $link; ?>">Read Notice</a>
		    </div><!--close button_small-->
		  </div>
		  <div class="content_container">
		     
		  	<div class="button_small">
		  	
		      <a href="plogin.php">Apply</a>
		    </div><!--close button_small-->
		  </div>
		  <!--close content_container-->
		  <br style="clear:both"/>
		  <div style="margin-bottom:7%;"></div>
          <br style="clear:both"/>		  
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
