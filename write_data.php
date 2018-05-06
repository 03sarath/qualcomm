<?php

    // Prepare variables for database connection
   
    $dbusername = "sarath";  // enter database username, I used "arduino" in step 2.2
    $dbpassword = "12345678";  // enter database password, I used "arduinotest" in step 2.2
    $server = "localhost"; // IMPORTANT: if you are using XAMPP enter "localhost", but if you have an online website enter its address, ie."www.yourwebsite.com"

    // Connect to your database

    $dbconnect = mysql_pconnect($server, $dbusername, $dbpassword);
    $dbselect = mysql_select_db("test",$dbconnect);

    // Prepare the SQL statement

    $sql = "INSERT INTO test.sensor (value,data,doll) VALUES ('".$_GET["value"]."','".$_GET["data"]."','".$_GET["doll"]."')";  
//$Sql="insert into tempmoi (temp1,moi1)  values ('".$_GET["temp1"]."', '".$_GET["moi1"]."')"; 	

    // Execute SQL statement

    mysql_query($sql);

?>