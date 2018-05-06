<?php
   	include("connect.php");
   	
   	$link=Connection();
	//$link2=Connection();
    $Num="1";
	$axisX=$_POST["axisX"];
	$axisY=$_POST["axisY"];
	$axisZ=$_POST["axisZ"];
	$hum1=$_POST["hum1"];
	$temp1=$_POST["temp1"];
	$meth=$_POST["meth"];
	$CoMo=$_POST["CoMo"];
	$Emgc=$_POST["Emgc"];
	$Lux=$_POST["Lux"];
	$SdB=$_POST["SdB"];
	$Num=$_POST["Num"];

  $query = "INSERT INTO`ssj`(`Xaxis`,`Yaxis`,`Zaxis`,`HUMIDITY`,`TEMPERATURE`,`CH4ppm`,`COppm`,`SOS`,`LIGHT`,`SOUND`) VALUES ('".$axisX."','".$axisY."','".$axisZ."','".$hum1."','".$temp1."','".$meth."','".$CoMo."','".$Emgc."','".$Lux."','".$SdB."')"; 
   	
	//$query1="UPDATE ssjupdate SET Xaxis='".$axisX."',Yaxis='".$axisY."',Zaxis='".$axisZ."',HUMIDITY='".$hum1."',TEMPERATURE='".$temp1."',CH4ppm='".$meth."',COppm='".$CoMo."',SOS='".$Emgc."',LIGHT='".$Lux."',SOUND='".$SdB."' WHERE Num= '".$Num."'";
	
$query1="UPDATE ssjupdate SET Username= 'sarathkumar',Xaxis = '$axisX', Yaxis = '$axisY', Zaxis = '$axisZ', HUMIDITY = '$hum1', TEMPERATURE = '$temp1', CH4ppm = '$meth', COppm = '$CoMo', SOS = '$Emgc', LIGHT = '$Lux', SOUND = '$SdB' WHERE Num = '1'";
	
   	mysql_query($query,$link);
	
	mysql_query($query1,$link);
	mysql_close($link);

   	header("Location: index.php");
?>
