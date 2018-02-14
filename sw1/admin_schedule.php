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
color:grey; 
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
        <li ><a href="admin_index.php">Home</a></li>
        <li class="current"><a href="admin_schedule.php">Schedule</a></li>
        <li><a href="admin_archive.php">Archive</a></li>
        <li><a href=""></a></li>
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



	
	<div style="margin-top:2%;margin-left:35%;">
            <h1 class="con" style="padding-left:9%;">Schedule Update</h1>
        
         </div>

    <form name="reg" action="schedule_exec.php" onsubmit="return validateForm()" method="post">


    <div class="content_container_s">
       <div class="form-group">
        		  <?php 
			  	error_reporting(E_ERROR);
    		$remarks=$_GET['remarks'];
    		if ($remarks==null and $remarks=="")
    		{
    		echo 'Insert New schedule Here';
    		}
    		if ($remarks=='success')
    		{
    		echo 'Insertion Success.Insert another:';
    		}
    		?>	
        <h2><label>Event Description</label></h2>
        <input type="text" class="form-control" name="description" value="" placeholder="Event" />
        <span class="text-danger"></span>
    </div>    
      </div><!--close content_container-->

      
<div class="content_container_s" style="margin-right:500px;">
       <div class="form-group" >
    
        <h2><label>Date</label></h2>
        <input type="date" class="form-control"id="pass" name="datee" value="" placeholder="mm/dd/yyyy" />
        <span class="text-danger"></span>
       
    </div>    
      </div><!--close content_container-->
      


<div class="content_container">
<div >
<input type="submit" value="Submit" style="color:white;height:40px;width:100px;background: #006A68;font-weight:700;">
</div>

  </div>

   </form>
   
<form action="checkbox_valuesche.php" method="post">

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
											<td><input type="checkbox" name="check_list[]" value="<?php echo $row1['serial']; ?>"><?php echo ' ',$serial; ?></td>
											<td><?php echo $row1['description']; ?></td>
											<td><?php echo $row1['datee']; ?></td>
											
										</tr>
										<?php $serial=$serial+1; ?>
										<?php
										}
										mysql_close();
										?>

</table>
<input type="submit" name="submit" value="Delete" style="color:white;height:40px;width:100px;background: #006A68;font-weight:700;">
<br>
		 </form>
   
	</div><!--close site_content--> 
    
	<div id="content_grey">
	      <?php include "footer.php"; ?>
	  <br style="clear:both"/>
    </div><!--close content_grey-->   
 
  
  
  
  
</body>
</html>
