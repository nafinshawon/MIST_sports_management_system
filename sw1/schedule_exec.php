

    <?php
    session_start();
    include('connection.php');
    $description=$_POST['description'];
    $datee=$_POST['datee'];
  
    mysql_query("INSERT INTO schedule(description, datee)VALUES('$description', '$datee')");

    header("location: admin_schedule.php?remarks=success");
    mysql_close($con);
    ?>