

    <?php
    $mysql_hostname = "localhost";
    $mysql_user = "1264640";
    $mysql_password = "xxxxxxx03";
    $mysql_database = "1264640";
    $prefix = "";
    $bd = mysql_connect($mysql_hostname, $mysql_user, $mysql_password) or die("Could not connect database");
    mysql_select_db($mysql_database, $bd) or die("Could not select database");
    ?>