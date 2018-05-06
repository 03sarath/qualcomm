<?php

	function Connection(){
		$server="192.168.7.73";
		$user="sarath";
		$pass="12345678";
		$db="intel";
	   	
		$connection = mysql_connect($server, $user, $pass);

		if (!$connection) {
	    	die('MySQL ERROR: ' . mysql_error());
		}
		
		mysql_select_db($db) or die( 'MySQL ERROR: '. mysql_error() );

		return $connection;
	}
?>
