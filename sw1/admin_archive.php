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
        <!--<a href="index.php"><img src="images/mistlogo.png" alt="" width="180" height="170"/></a>-->
        <li ><a href="admin_index.php">Home</a></li>
        <li><a href="admin_schedule.php">Year Schedule</a></li>
        <li  class="current"><a href="admin_archive.php">Archive</a></li>
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
            <h1 class="con">Archive</h1>
         </div>

         <form   method = "post" action = "<?php $_PHP_SELF ?>">

<div class="content_container">
       <div class="form-group">
    
        <h2><label>Name</label></h2>
        <input type="text" class="form-control" name="name" value="" placeholder="Your Name"/>
        <span class="text-danger"></span>
    </div>
      </div><!--close content_container-->

    <div class="content_container">
       <div class="form-group">
    
        <h2><label>Id</label></h2>
        <input type="text" class="form-control" name="id" value="" placeholder="Your ID" />
        <span class="text-danger"></span>
    </div>    
      </div><!--close content_container-->

  
  <div class="content_container">
        <div class="form-group">

 <h2><label> Year </label></h2>
    <select id="year" name="year">
      <!--<option>ALL</option>-->
       <option value="2016"> 2016 </option>
        <option value="2015">2015</option>
        <option value="2014">2014</option>
        <option value="2013">2013</option>
        <option value="2012">2012</option>
        <option value="2011">2011</option>
        <option value="2010">2010</option>
        <option value="2009">2009</option>
        <option value="2008">2008</option>
        <option value="2007">2007</option>
        <option value="2006">2006</option>
        <option value="2005">2005</option>
        <option value="2004">2004</option>
        <option value="2003">2003</option>
        <option value="2002">2002</option>
        <option value="2001">2001</option>
        <option value="2000">2000</option>
        <option value="1999">1999</option>
        <option value="1998">1998</option>
    </select>
     </div>
   
      </div><!--close content_container-->


      <div class="content_container">
       <div class="form-group">
     
        <h2><label>Event Name: </label></h2>
        <select id="event" name="event">
        <!-- <option>ALL</option>--> 
        <option value="Football">Football </option>
          <option value="Cricket">Cricket </option>
          <option value="volyball">volyball</option>
          <option value="table tennis">table tennis </option>
        </select>
      </div>
     
      </div><!--close content_container-->

      
 <div class="content_container" style="margin-bottom:3%">
         
       
			  <input type="submit" name="search" value="search" style="color:black;height:40px;width:100px;  background-color:#006A68 repeat-x;font-weight:700;">

      </div><!--close content_container-->  

   
  </form>

  

  <div style="margin-bottom:25%"></div>


 <h1 class="con">Result</h1>


<table>
  <tr>
    <th>Name</th>
    <th>ID</th>
    <th>Year</th>
    <th>Event  Name</th>
  </tr>

<?php 

error_reporting(E_ERROR);

         if(isset($_POST['search'])) {
            include('connection.php');

            if(isset($_POST['id'])){
			$id=$_POST['id'];
//$query=mysql_query("select * from stdinfo where stdinfo.id='$id'");
			$query=mysql_query("select * from finallist inner join stdinfo on finallist.id=stdinfo.id inner join applied1 on stdinfo.id=applied1.id  where stdinfo.id='$id'");
				//$query = mysql_query("select * from finallist inner join stdinfo on finallist.id=stdinfo.id inner join applied on stdinfo.id=applied.id  where stdinfo.id='$id'"); // SQL query to fetch data to display in menu.
while ($row = mysql_fetch_array($query)) {
	?>
	<tr>
		<th><?php echo $row['name']; ?></th>
		<th><?php echo $row['id']; ?></th>
		<th><?php echo $row['yearr']; ?></th>
		<th><?php echo $row['category']; ?></th>
	</tr>
<?php     $f=1;
}
			}
			elseif(isset($_POST['name']))
			{
				
				$name=$_POST['name'];
				echo $name;
				$query=mysql_query("select * from stdinfo where stdinfo.name like '$name%'");
				
				while ($row = mysql_fetch_array($query)) {
	?>
	<tr>
		<th><?php echo $row['name']; $new=$row['name'];?></th>
		<th><?php echo $row['id']; ?></th>
		<th><?php echo $row['yearr']; ?></th>
		<?php $sql=mysql_query("select * from applied1 where name='$new'");
		
		while ($row1 = mysql_fetch_array($sql)){ ?>
		
		<th>	<?php echo $row1['category']; $f=0; ?> </th>
	<?php	}
if ($f)
{
	?><th> <?php echo 'not selected'; ?> </th>
<?php	
}
	$f=1;	?>
	</tr>
<?php
}


			}
		 }
?>
</table>
  
 
  </div><!--close main-->
  
   <div id="content_grey">
        <?php include "footer.php"; ?>
    <br style="clear:both"/>
    </div><!--close content_grey-->   
 
  
</body>
</html>
