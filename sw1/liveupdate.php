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
        <li class="current"><a href="index.php">Home</a></li>
        <li ><a href="year_schedule.php">Year Schedule</a></li>
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



 <div class="content_container_s">
<div style="margin-top:5%">
            <h1 class="con">Team 1 </h1>
        
         </div>

         <form   method = "post" action = "<?php $_PHP_SELF ?>">

          <div style="margin-top:5%">
            <h1 style="text-decoration:underline;"><strong>Goal : <strong></h1>
        
         </div>

<div class="content_container">
       <div class="form-group">
    
        <h2><label>Player Name</label></h2>
        <input type="text" class="form-control" name="name" value="" placeholder="Player Name"/>
        <span class="text-danger"></span>
    </div>
      </div><!--close content_container-->


<div class="content_container">
       <div class="form-group">
     
        <h2><label>Goal Type: </label></h2>
        <select id="goal" name="goal">
        <!-- <option>ALL</option>--> 
        <option>Normal </option>
          <option>Free Kick</option>
          <option>Panalty</option>
          <option>Own goal </option>
        </select>
      </div>
     
      </div><!--close content_container-->


    <div class="content_container">
       <div class="form-group">
    
        <h2><label>Time:</label></h2>
        <input type="text" class="form-control" name="time" value="" placeholder="time" />
        <span class="text-danger"></span>
    </div>    
      </div><!--close content_container-->


<div class="content_container" style="margin-bottom:3%;margin-top:2%;">
         
        <div class="button_small" style="font-weight:700">
          <a href="">Update</a>
          
        </div><!--close button_small-->
      </div><!--close content_container-->  

<div class="content_container">

<div style="margin-top:5%">
            <h1 style="text-decoration:underline;"><strong>Faul : <strong></h1>
        
         </div>
         </div><!--close content_container-->

         <div class="content_container">
       <div class="form-group">
    
        <h2><label>Player Name</label></h2>
        <input type="text" class="form-control" name="name" value="" placeholder="Player Name"/>
        <span class="text-danger"></span>
    </div>
      </div><!--close content_container-->

      <div class="content_container">
       <div class="form-group">
    
        <h2><label>Fine:</label></h2>
        <input type="text" class="form-control" name="fine" value="" placeholder="Fine"/>
        <span class="text-danger"></span>
    </div>
      </div><!--close content_container-->

      <div class="content_container" style="margin-bottom:3%;margin-top:2%;">
         
        <div class="button_small" style="font-weight:700">
          <a href="">Update</a>
          
        </div><!--close button_small-->
      </div><!--close content_container-->  

      <div class="content_container">

<div style="margin-top:5%">
            <h1 style="text-decoration:underline;"><strong>Red Card : <strong></h1>
        
         </div>
         </div><!--close content_container-->


          <div class="content_container">
       <div class="form-group">
    
        <h2><label>Player Name</label></h2>
        <input type="text" class="form-control" name="name" value="" placeholder="Player Name"/>
        <span class="text-danger"></span>
    </div>
      </div><!--close content_container-->

      <div class="content_container">
       <div class="form-group">
    
        <h2><label>Time:</label></h2>
        <input type="text" class="form-control" name="time" value="" placeholder="Time"/>
        <span class="text-danger"></span>
    </div>
      </div><!--close content_container-->

      <div class="content_container" style="margin-bottom:3%;margin-top:2%;">
         
        <div class="button_small" style="font-weight:700">
          <a href="">Update</a>
          
        </div><!--close button_small-->
      </div><!--close content_container-->  


         <div class="content_container">

<div style="margin-top:5%">
            <h1 style="text-decoration:underline;"><strong>Yellow Card : <strong></h1>
        
         </div>
         </div><!--close content_container-->


          <div class="content_container">
       <div class="form-group">
    
        <h2><label>Player Name</label></h2>
        <input type="text" class="form-control" name="name" value="" placeholder="Player Name"/>
        <span class="text-danger"></span>
    </div>
      </div><!--close content_container-->

      <div class="content_container">
       <div class="form-group">
    
        <h2><label>Time:</label></h2>
        <input type="text" class="form-control" name="time" value="" placeholder="Time"/>
        <span class="text-danger"></span>
    </div>
      </div><!--close content_container-->

      <div class="content_container" style="margin-bottom:3%;margin-top:2%;">
         
        <div class="button_small" style="font-weight:700">
          <a href="">Update</a>
          
        </div><!--close button_small-->
      </div><!--close content_container-->  


      <div class="content_container">

<div style="margin-top:5%">
            <h1 style="text-decoration:underline;"><strong>Substitute Player: <strong></h1>
        
         </div>
         </div><!--close content_container-->


          <div class="content_container">
       <div class="form-group">
    
        <h2><label>Player In:</label></h2>
        <input type="text" class="form-control" name="Player_in" value="" placeholder="Player In"/>
        <span class="text-danger"></span>
    </div>
      </div><!--close content_container-->

      <div class="content_container">
       <div class="form-group">
    
        <h2><label>Player Out:</label></h2>
        <input type="text" class="form-control" name="Player Out" value="" placeholder="Player Out"/>
        <span class="text-danger"></span>
    </div>
      </div><!--close content_container-->

      <div class="content_container" style="margin-bottom:3%;margin-top:2%;">
         
        <div class="button_small" style="font-weight:700">
          <a href="">Update</a>
          
        </div><!--close button_small-->
      </div><!--close content_container-->  

<div class="content_container">

<div style="margin-top:5%">
            <h1 style="text-decoration:underline;"><strong>Injury: <strong></h1>
        
         </div>
         </div><!--close content_container-->


          <div class="content_container">
       <div class="form-group">
    
        <h2><label>Player Name:</label></h2>
        <input type="text" class="form-control" name="P_name" value="" placeholder="Player Name"/>
        <span class="text-danger"></span>
    </div>
      </div><!--close content_container-->

      <div class="content_container">
       <div class="form-group">
    
        <h2><label>Player In:</label></h2>
        <input type="text" class="form-control" name="Player_in" value="" placeholder="Player In"/>
        <span class="text-danger"></span>
    </div>
      </div><!--close content_container-->

      <div class="content_container" style="margin-bottom:3%;margin-top:2%;">
         
        <div class="button_small" style="font-weight:700">
          <a href="">Update</a>
          
        </div><!--close button_small-->
      </div><!--close content_container-->  


  </form>

</div><!--close container for team 1-->


 <div class="content_container"></div>


 <div class="content_container_s">

<div style="margin-top:5%">
            <h1 class="con">Team 2 </h1>
        
         </div>

        <form   method = "post" action = "<?php $_PHP_SELF ?>">

          <div style="margin-top:5%">
            <h1 style="text-decoration:underline;"><strong>Goal : <strong></h1>
        
         </div>

<div class="content_container">
       <div class="form-group">
    
        <h2><label>Player Name</label></h2>
        <input type="text" class="form-control" name="name" value="" placeholder="Player Name"/>
        <span class="text-danger"></span>
    </div>
      </div><!--close content_container-->


<div class="content_container">
       <div class="form-group">
     
        <h2><label>Goal Type: </label></h2>
        <select id="goal" name="goal">
        <!-- <option>ALL</option>--> 
        <option>Normal </option>
          <option>Free Kick</option>
          <option>Panalty</option>
          <option>Own goal </option>
        </select>
      </div>
     
      </div><!--close content_container-->


    <div class="content_container">
       <div class="form-group">
    
        <h2><label>Time:</label></h2>
        <input type="text" class="form-control" name="time" value="" placeholder="time" />
        <span class="text-danger"></span>
    </div>    
      </div><!--close content_container-->


<div class="content_container" style="margin-bottom:3%;margin-top:2%;">
         
        <div class="button_small" style="font-weight:700">
          <a href="">Update</a>
          
        </div><!--close button_small-->
      </div><!--close content_container-->  

<div class="content_container">

<div style="margin-top:5%">
            <h1 style="text-decoration:underline;"><strong>Faul : <strong></h1>
        
         </div>
         </div><!--close content_container-->

         <div class="content_container">
       <div class="form-group">
    
        <h2><label>Player Name</label></h2>
        <input type="text" class="form-control" name="name" value="" placeholder="Player Name"/>
        <span class="text-danger"></span>
    </div>
      </div><!--close content_container-->

      <div class="content_container">
       <div class="form-group">
    
        <h2><label>Fine:</label></h2>
        <input type="text" class="form-control" name="fine" value="" placeholder="Fine"/>
        <span class="text-danger"></span>
    </div>
      </div><!--close content_container-->

      <div class="content_container" style="margin-bottom:3%;margin-top:2%;">
         
        <div class="button_small" style="font-weight:700">
          <a href="">Update</a>
          
        </div><!--close button_small-->
      </div><!--close content_container-->  

      <div class="content_container">

<div style="margin-top:5%">
            <h1 style="text-decoration:underline;"><strong>Red Card : <strong></h1>
        
         </div>
         </div><!--close content_container-->


          <div class="content_container">
       <div class="form-group">
    
        <h2><label>Player Name</label></h2>
        <input type="text" class="form-control" name="name" value="" placeholder="Player Name"/>
        <span class="text-danger"></span>
    </div>
      </div><!--close content_container-->

      <div class="content_container">
       <div class="form-group">
    
        <h2><label>Time:</label></h2>
        <input type="text" class="form-control" name="time" value="" placeholder="Time"/>
        <span class="text-danger"></span>
    </div>
      </div><!--close content_container-->

      <div class="content_container" style="margin-bottom:3%;margin-top:2%;">
         
        <div class="button_small" style="font-weight:700">
          <a href="">Update</a>
          
        </div><!--close button_small-->
      </div><!--close content_container-->  


         <div class="content_container">

<div style="margin-top:5%">
            <h1 style="text-decoration:underline;"><strong>Yellow Card : <strong></h1>
        
         </div>
         </div><!--close content_container-->


          <div class="content_container">
       <div class="form-group">
    
        <h2><label>Player Name</label></h2>
        <input type="text" class="form-control" name="name" value="" placeholder="Player Name"/>
        <span class="text-danger"></span>
    </div>
      </div><!--close content_container-->

      <div class="content_container">
       <div class="form-group">
    
        <h2><label>Time:</label></h2>
        <input type="text" class="form-control" name="time" value="" placeholder="Time"/>
        <span class="text-danger"></span>
    </div>
      </div><!--close content_container-->

      <div class="content_container" style="margin-bottom:3%;margin-top:2%;">
         
        <div class="button_small" style="font-weight:700">
          <a href="">Update</a>
          
        </div><!--close button_small-->
      </div><!--close content_container-->  


      <div class="content_container">

<div style="margin-top:5%">
            <h1 style="text-decoration:underline;"><strong>Substitute Player: <strong></h1>
        
         </div>
         </div><!--close content_container-->


          <div class="content_container">
       <div class="form-group">
    
        <h2><label>Player In:</label></h2>
        <input type="text" class="form-control" name="Player_in" value="" placeholder="Player In"/>
        <span class="text-danger"></span>
    </div>
      </div><!--close content_container-->

      <div class="content_container">
       <div class="form-group">
    
        <h2><label>Player Out:</label></h2>
        <input type="text" class="form-control" name="Player Out" value="" placeholder="Player Out"/>
        <span class="text-danger"></span>
    </div>
      </div><!--close content_container-->

      <div class="content_container" style="margin-bottom:3%;margin-top:2%;">
         
        <div class="button_small" style="font-weight:700">
          <a href="">Update</a>
          
        </div><!--close button_small-->
      </div><!--close content_container-->  

<div class="content_container">

<div style="margin-top:5%">
            <h1 style="text-decoration:underline;"><strong>Injury: <strong></h1>
        
         </div>
         </div><!--close content_container-->


          <div class="content_container">
       <div class="form-group">
    
        <h2><label>Player Name:</label></h2>
        <input type="text" class="form-control" name="P_name" value="" placeholder="Player Name"/>
        <span class="text-danger"></span>
    </div>
      </div><!--close content_container-->

      <div class="content_container">
       <div class="form-group">
    
        <h2><label>Player In:</label></h2>
        <input type="text" class="form-control" name="Player_in" value="" placeholder="Player In"/>
        <span class="text-danger"></span>
    </div>
      </div><!--close content_container-->

      <div class="content_container" style="margin-bottom:3%;margin-top:2%;">
         
        <div class="button_small" style="font-weight:700">
          <a href="">Update</a>
          
        </div><!--close button_small-->
      </div><!--close content_container-->  


  </form>





</div><!--close container for team2 -->





       </div>



     <div id="content_grey">
        <?php include "footer.php"; ?>
    <br style="clear:both"/>
    </div><!--close content_grey-->   
 
  </div><!--close main-->
  
  
  
</body>
</html>
