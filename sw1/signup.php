<!DOCTYPE html ><!--PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">-->

 <script type="text/javascript">
    function validateForm()
    {
    var a=document.forms["reg"]["name"].value;
    var b=document.forms["reg"]["gender"].value;
    var c=document.forms["reg"]["dept"].value;
    var d=document.forms["reg"]["sessionn"].value;
	var e=document.forms["reg"]["email"].value;
    var f=document.forms["reg"]["mobile"].value;
	var g=document.forms["reg"]["password"].value;
    var h=document.forms["reg"]["confirm_password"].value;
	
    if ((a==null || a=="") && (b==null || b==""))
      {
      alert("All Field must be filled out");
      return false;
      }
    if (a==null || a=="")
      {
      alert("Name must be filled out");
      return false;
      }
    if (b==null || b=="")
      {
      alert("Gender must be filled out");
      return false;
      }
	  if((a==null || a=="") || (b==null || b=="")||(c==null || c=="") || (d==null || d=="")||(e==null || e=="") || (f==null || f=="")||(g==null || g=="") || (h==null || h==""))
	  {
		  alert("All must be filled out");
		  return false;
	  }
	  if (g!=h)
	  {
		  alert("Password doesn't match");
		  return false;
	  }
   
    }
	
    </script>
	
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
        <li class="current"> <a href="signup.php">Sign Up</a></li>
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
		

          <div style="margin-top:2%;padding: 8px 0 0 10px;">
            <h1 class="con" >Sign Up</h1>
        
         </div>

                  <form name="reg" method="post" onsubmit="return validateForm()" action="applypage.php" class="form-horizontal">

		  
       <div class="form-group">
    
        <h2><label></label></h2>
        <span class="text-danger"></span>
    </div>
		 
		 
		 
<div class="content_container_s">
       <div class="form-group">
    
        <h2><label>Name</label></h2>
        <input type="text" class="form-control" name="name" value="" placeholder="Your Name"/>
        <span class="text-danger"></span>
    </div>
      

    
       <div class="form-group">
    
        <h2><label>Id</label></h2>
        <input type="text" class="form-control" name="id" value="" placeholder="Your ID" />
        <span class="text-danger"></span>
    </div>    
     


       <div class="form-group">
    
         <h2><label> Department </label></h2>
    <select id="dept" name="dept">
      <!--<option>ALL</option>-->
      <option value="CE"> CE</option>
        <option value="CSE">CSE</option>
        <option value="EECE">EECE</option>
        <option value="AE">AE</option>
        <option value="NAME">NAME</option>
        <option value="ME">ME</option>
        <option value="NSE">NSE</option>
        <option value="Arch">Arch</option>
       
    </select>
    </div>    
      


 <!--gender-->

                      <div class="form-group">
                          <h2><label>Gender:</label></h2>
                            <div >
                               <h3> <input  type="radio" id="male" name="gender" checked>
                                <label for="male">Male</label></h3>
                            </div>
                            <div >
                                <h3><input type="radio" id="female" name="gender">
                                <label for="female">Female</label></h3>
                            </div>
                      </div>



        <div class="form-group">

 <h2><label> Session </label></h2>
    <select id="sessionn" name="sessionn">
      <!--<option>ALL</option>-->
      <option value="2016-17"> 2016-17</option>
        <option value="2015-16">2015-16</option>
        <option value="2014-15">2014-15</option>
        <option value="2013-14">2013-14</option>
        <option value="2012-13">2012-13</option>
        <option value="2011-12">2011-12</option>
        <option value="2010-11">2010-11</option>
        <option value="2009-10">2009-10</option>
        <option value="2008-09">2008-09</option>
        <option value="2007-08">2007-08</option>
        <option value="2006-07">2006-07</option>
        <option value="2005-06">2005-06</option>
        <option value="2004-05">2004-05</option>
        <option value="2003-04">2003-04</option>
        <option value="2002-03">2002-03</option>
        <option value="2001-02">2001-02</option>
        <option value="2000-01">2000-01</option>
        <option value="1999-2000">1999-2000</option>
        <option value="1998-99">1998-99</option>
    </select>
     </div>
   
    <div class="form-group">

 <h2><label> Rank </label></h2>
    <select id="rank" name="rank">
      <!--<option>ALL</option>-->
      <option value="civil"> civil</option>
        <option value="military">military</option>
    </select>
     </div>
   
     
       <div class="form-group">
    
        <h2><label>Email</label></h2>
        <input type="email" class="form-control" id="eml" name="email" value="" placeholder="Your Email"/>
        <span class="text-danger"></span>
    </div>
     

      
       <div class="form-group">
    
        <h2><label>Mobile No</label></h2>
        <input type="text" class="form-control" name="mobile" value="" placeholder="Your Mobile Number"/>
        <span class="text-danger"></span>
    </div>
     

       <div class="form-group" >
    
        <h2><label>Password</label></h2>
        <input type="password" class="form-control"id="pass" name="password" value="" placeholder="Your Password" />
        <span class="text-danger"></span>
    </div>    
      

       <div class="form-group" >
    
        <h2><label>Confirm Password</label></h2>
        <input type="password" class="form-control"id="pass" name="confirm_password" value="" placeholder="Your Confirm Password" />
        <span class="text-danger"></span>
       
    </div>    
      

     
       <div class="form-group">
    
        <h2><label>Previous Record</label></h2>
        <input type="text" class="form-control" name="record" value="" placeholder="Your Record"/>
        <span class="text-danger"></span>
    </div>
     

</br>
      
     <div class="content_container_s" style="margin-bottom:3%;margin-top:2%;display:inline-block;margin-left:29%">
         

      </div><!--close content_container-->  

      <div class="content_container" style="margin-bottom:3%;margin-top:2%;margin-left:29%">
         
         
      </div><!--close content_container-->  
	  <input type="submit" value="Submit" style="color:black;height:40px;width:100px;  background-color:#006A68 repeat-x;font-weight:700;">
	  </br></br>

<input type="reset" align="left"  value="Reset" style="color:black;height:40px;width:100px;  background-color:#006A68 repeat-x;font-weight:700;">

 </div><!--close content_container--> 

  </form>


</div><!--close main-->

  <div id="content_grey">
        <?php include "footer.php"; ?>
    <br style="clear:both"/>
    </div><!--close content_grey-->   
 
</body>
</html>
