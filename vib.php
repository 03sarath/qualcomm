<?php
$con=mysqli_connect("192.168.7.7","sarath","12345678","vibration_test");
// Check connection
if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
$result = mysqli_query($con,"select RFID from updatevib");

while($row = mysqli_fetch_array($result)) {
  echo $row['RFID'];
  //echo "<br>"; 
}
?>

