<?php

foreach ($_REQUEST as $key => $value)
{
	if ($key == "yourdata") {
		$yourdata = $value;
	}
	//else if($key == "yourdata")
}

// EDIT: Your mysql database account information
$username = "sarath";
$password = "12345678";
$database = "inst";
$tablename = "sar";
$localhost = "192.168.0.18";

// Check Connection to Database
if (mysql_connect($localhost, $username, $password))
  {
  	@mysql_select_db($database) or die ("Unable to select database");

    // Next two lines will write into your table 'test_table_name_here' with 'yourdata' value from the arduino and will timestamp that data using 'now()'
    $query = "UPDATE $tablename SET VALUES ($yourdata,now()) WHERE recorded=2017-10-19 10:19:04";
  	$result = mysql_query($query);
  } else {
  	echo('Unable to connect to database.');
  }

?>