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
#eml{
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
        <li ><a href="index.php">Home</a></li>
        <li><a href="year_schedule.php">Year Schedule</a></li>
        <li  ><a href="archive.php">Archive</a></li>
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
		

          <div style="margin-top:2%;">
            <h1 class="con">Forget Password</h1>
        
         </div>

         <form   method = "post" action = "<?php $_PHP_SELF ?>">


    <div class="content_container" style="width:27%;">
       <div class="form-group">
    
        <h2><label>Email</label></h2>
        <input type="email" class="form-control" name="name" id="eml" value="" placeholder="Your Email" />
        <span class="text-danger"></span>
    </div>    
      </div><!--close content_container-->

      
<div class="content_container" style="margin-right:5000px;">
       <div class="form-group" >
    
        
    </div>    
      </div><!--close content_container-->
      

 

 <div class="content_container" style="margin-bottom:3%;margin-top:2%;">
         
        <div class="button_small" style="font-weight:700">
         
          <a href="#">Submit</a>
        </div><!--close button_small-->
      </div><!--close content_container-->  

      <div class="content_container" style="margin-bottom:3%;margin-top:2%;margin-left:-5%;">
         
        <div class="button_small" style="font-weight:700">
         
          <a href="#">Cancel</a>
        </div><!--close button_small-->
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
