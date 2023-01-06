<?php
define('DB_SERVER','82.180.143.1:3306');
define('DB_USER','u224427717_techy');
define('DB_PASS' ,'Techy@12345');
define('DB_NAME', 'u224427717_techy');
$con = mysqli_connect(DB_SERVER,DB_USER,DB_PASS,DB_NAME);

// Check connection
if (mysqli_connect_errno())
{
echo "Failed to connect to MySQL: " . mysqli_connect_error();
 }

?>

