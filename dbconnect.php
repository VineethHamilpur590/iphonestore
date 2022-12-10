<?php
$servername = "iphonedb.cd8it5oofcje.us-west-1.rds.amazonaws.com";
$username = "root";
$password = "password";

// for local machine password=> Password@123
// for remote
//$password = "root";

$dbname = "iphoneproductsdb";

$conn = new mysqli($servername, $username, $password, $dbname);


?>
