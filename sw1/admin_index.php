<!DOCTYPE html ><!--PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">-->
<?php include "header.php"; ?>

<div id="menubar">
	
      <ul id="menu">
        <!--<a href="index.php"><img src="images/mistlogo.png" alt="" width="180" height="170"/></a>-->
        <li class="current"><a href="admin_index.php">Home</a></li>
        <li><a href="admin_schedule.php">Year Schedule</a></li>
        <li><a href="archive.php">Archive</a></li>
        <li><a href="contact.php"></a></li>
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
    
	
	
	<div id="site_content" >		
	
	<div style="margin-top:2%;margin-left:35%;">
            <h1 class="con" style="padding-left:10%;">Admin Panel</h1>
        
         </div>
		 
	   <div class="content_container" style="margin-bottom:3%;margin-top:2%;">
         
        <div class="button_ad" style="font-weight:700">
          <a href="countdown.php">Countdown</a>
          
        </div><!--close button_small-->
      </div><!--close content_container-->  
  <div class="content_container" style="margin-bottom:3%;margin-top:2%;">
         
        <div class="button_ad" style="font-weight:700">
          <a href="uploadgui.php">Upload notice</a>
          
        </div><!--close button_small-->
      </div><!--close content_container-->  

 <div class="content_container" style="margin-bottom:3%;margin-top:2%;">
         
        <div class="button_ad" style="font-weight:700">
         
          <a href="accept_reject.php">Update Player List</a>
        </div><!--close button_small-->
      </div><!--close content_container--> 

 
<div class="content_container" style="margin-bottom:3%;margin-top:2%;">
         
        <div class="button_ad" style="font-weight:700">
          <a href="index.php">Logout</a>
          
        </div><!--close button_small-->
      </div><!--close content_container-->  


	</div><!--close site_content--> 
    
	<div id="content_grey">
	      <?php include "footer.php"; ?>
	  <br style="clear:both"/>
    </div><!--close content_grey-->   
 
  </div><!--close main-->
  
  
  
</body>
</html>
