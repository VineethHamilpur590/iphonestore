<?php
$servername = "iphonedb.cd8it5oofcje.us-west-1.rds.amazonaws.com1";
$username = "root";
$password = "password";

// for local machine password=> Password@123
// for remote
//$password = "root";

$dbname = "iphonedb";

$conn = new mysqli($servername, $username, $password, $dbname);


?>