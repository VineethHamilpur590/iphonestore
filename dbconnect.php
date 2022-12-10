<?php
$servername = "iphonedb.cd8it5oofcje.us-west-1.rds.amazonaws.com";
$username = "root";
$password = "password";

// for local machine password=> Password@123
// for remote
//$password = "root";

$dbname = "iphoneproductsdb";

try {
  $conn = new PDO("mysql:host=$servername;dbname=myDB", $username, $password);
  // set the PDO error mode to exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  echo "connected sucessfully";
} catch(PDOException $e) {
  echo "Connection failed: " . $e->getMessage();
}


?>
