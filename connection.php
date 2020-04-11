<?php
$servername = "mysql.hostinger.in";
$username = "u492913123_ysan";
$password = "sanchay@1";
$dbname = "u492913123_ccnde"; 

/* $servername = "localhost";
$username = "root";
$password = "";
$dbname = "ccndep"; */

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
?>