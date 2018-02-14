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

</style>

<div id="menubar">
  
      <ul id="menu">
        <?php 
			  	error_reporting(E_ERROR);
				    	require_once('connection.php');
    		$remarks=$_GET['remark']; ?>
		<li><a href="studentindex.php?remark=<?php echo $remarks; ?>">Home</a></li>
        <li><a href="stdinfo.php?remark=<?php echo $remarks; ?>">Personal info</a></li>
        <li><a href="std_archive.php?remark=<?php echo $remarks; ?>">Previous Records</a></li>
        <li  class="current"><a href="apply.php?remark=<?php echo $remarks; ?>">Apply</a></li>
        <li><a href="index.php">Logout</a></li>
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



		 
		 
		 
    
 <div style="margin-top:5%">
            <h1 class="con">Apply For Events </h1>
        
         </div>
 <?php 
			  	error_reporting(E_ERROR);
    		$remarks=$_GET['remark'];
			?>
         <form   method = "post" action="code_exec.php?remark=<?php echo $remarks; ?>" >

<div class="content_container">
       <div class="form-group">
    
	<?php 
			  error_reporting(E_ERROR);
			  include('connection.php');
  if($remarks==success)
  {
	  echo 'Application success';
  }
			
			
		
		
    		?>	
	
        


      <div class="content_container">
       <div class="form-group">
     
        <h2><label>Event Name: </label></h2>
        <select id="event" name="category">
        <!-- <option>ALL</option>--> 
        <option value="football">Football </option>
          <option value="cricket">Cricket </option>
          <option value="volleyball">volyball</option>
          <option value="tabletennis">table tennis </option>
        </select>
      </div>
     
      </div><!--close content_container-->

      
 <div class="content_container" style="margin-bottom:3%;margin-top:2%;">
         
          	  <input name="apply" type="submit" value="Apply" style="color:black;height:40px;width:100px;  background-color:#006A68 repeat-x;font-weight:700;">
          
      </div><!--close content_container-->  

 <div class="content_container" style="margin-bottom:3%;margin-top:2%;">
         
         
          	  <input name="reset" type="reset" value="Reset" style="color:black;height:40px;width:100px;  background-color:#006A68 repeat-x;font-weight:700;">
      </div><!--close content_container-->  


  </form>

  </div><!--close main-->

 
</body>
</html>