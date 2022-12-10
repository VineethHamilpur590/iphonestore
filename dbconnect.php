<?php
$host = "iphonedb.cd8it5oofcje.us-west-1.rds.amazonaws.com";
$username = "root";
$password = "password";

// for local machine password=> Password@123
// for remote
//$password = "root";

$dbname = "iphoneproductsdb";

$dsn = "mysql:host=$host;dbname=$dbname;charset=UTF8";

try {
	$pdo = new PDO($dsn, $username, $password);

	if ($pdo) {
		echo "Connected to the $dbname database successfully!";
	}
} catch (PDOException $e) {
	echo $e->getMessage();
}


?>
