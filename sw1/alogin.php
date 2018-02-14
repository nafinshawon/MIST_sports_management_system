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
#pass{
   width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    box-sizing: border-box;
    border: 2px solid red;
    border-radius: 4px;
    background-color: #f1f1f1;
    color:grey;"
}

</style>

<div id="menubar">
  
      <ul id="menu">
        <!--<a href="index.php"><img src="images/mistlogo.png" alt="" width="180" height="170"/></a>-->
        <li class="current"><a href="index.php">Home</a></li>
        <li><a href="year_schedule.php">Year Schedule</a></li>
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
            <h1 class="con">Log In</h1>
        
         </div>

         <form   method = "post" action = "adminloginexec.php">


    <div class="content_container">
       <div class="form-group">
    
        <h2><label>Username</label></h2>
        <input type="text" class="form-control" name="username" value="" placeholder="Your ID" />
        <span class="text-danger"></span>
    </div>    
      </div><!--close content_container-->

      
<div class="content_container" style="margin-right:500px;">
       <div class="form-group" >
    
        <h2><label>Password</label></h2>
        <input type="password" class="form-control"id="pass" name="password" value="" placeholder="Your Password" />
        <span class="text-danger"></span>
        <a href="forget.php">forgot password?</a>
    </div>    
      </div><!--close content_container-->
      

 <div class="content_container" style="margin-bottom:3%;margin-top:2%;">
         
          	  <input name="login" type="submit" value="Login" style="color:black;height:40px;width:100px;  background-color:#006A68 repeat-x;font-weight:700;">
          
      </div><!--close content_container-->  

 <div class="content_container" style="margin-bottom:3%;margin-top:2%;">
         
         
          	  <input name="reset" type="submit" value="Reset" style="color:black;height:40px;width:100px;  background-color:#006A68 repeat-x;font-weight:700;">
      </div><!--close content_container-->  

   
  </form>
</div>

</div><!--close main-->

  <div id="content_grey">
        <?php include "footer.php"; ?>
    <br style="clear:both"/>
    </div><!--close content_grey-->   
 
</body>
</html>
