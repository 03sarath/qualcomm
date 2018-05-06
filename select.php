<?php

foreach ($_REQUEST as $key => $value)
{
	if ($key == "RFID") {
		$RFID = $value;
	}
}

// EDIT: Your mysql database account information
$username = "sarath";
$password = "12345678";
$database = "vibration_test";
$tablename = "updatevib";
$localhost = "192.168.1.100";

// Check Connection to Database
if (mysql_connect($localhost, $username, $password))
  {
  	@mysql_select_db($database) or die ("Unable to select database");

    // Next two lines will write into your table 'test_table_name_here' with 'yourdata' value from the arduino and will timestamp that data using 'now()'
    $query = "SELECT $RFID FROM $tablename";
  	$result = mysql_query($query);
  } else {
  	echo('Unable to connect to database.');
  }

?>