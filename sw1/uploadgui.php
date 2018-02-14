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

  	<div style="margin-top:2%">
            <h1 class="con">Upload File</h1>
        
         </div>

  	<form action="upload.php"
enctype="multipart/form-data" method="post">

<h2>Upload a file from computer :<br>


  <input class="con" type="file" name="fileToUpload" id="fileToUpload" style="margin-top:4%;">
</h2>
<input type="submit" value="Upload" name="submit">
<!--<div>
  <input type="submit" value="Send">
</div>

<div class="content_container" style="margin-bottom:3%;margin-top:2%;">
        <div class="button_small" style="font-weight:700">
          <a href=".php">Send</a>
        </div>
-->
        <!--close button_small-->
</div><!--close content_container-->  

</form>
</div>


<div id="content_grey">
        <?php include "footer.php"; ?>
    <br style="clear:both"/>
    </div><!--close content_grey-->   
 
  </div><!--close main-->
  
  
  
</body>
</html>
