<?php
$con=mysqli_connect("localhost","root","","news_data");
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

// Change character set to utf
$l = 'मराठी';
mysqli_set_charset($con,"utf8");
mysqli_query($con,"INSERT INTO news (newstitle)VALUES('".$l."')");
mysqli_close($con);
?>
