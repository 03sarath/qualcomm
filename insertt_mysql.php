
<?php

foreach ($_GET as $key => $value)
{
	if ($key == "column1") {
		$column1 = $value1;
	}
	if ($key == "column2") {
		$column2 = $value2;
	}

}

// EDIT: Your mysql database account information
$username = "sarath";
$password = "12345678";
$database = "instt";
$tablename = "sar";
$localhost = "localhost";

// Check Connection to Database
if (mysql_connect($localhost, $username, $password))
  {
  	@mysql_select_db($database) or die ("Unable to select database");

    // Next two lines will write into your table 'test_table_name_here' with 'yourdata' value from the arduino and will timestamp that data using 'now()'
    $query = "INSERT INTO $tablename (column1, column2) VALUES ('$value1' , '$value2')";
  	$result = mysql_query($query);
  } else {
  	echo('Unable to connect to database.');
  }
